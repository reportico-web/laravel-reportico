<?php namespace Reportico\Reportico;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;
use Illuminate\Auth\Guard;

class ReporticoServiceProvider extends ServiceProvider {

    public $engine;
    private $_assetsUrl;

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
        $this->loadViewsFrom(__DIR__.'/../../views', 'reportico');
        $this->publishes([
                    __DIR__.'/../../config/config.php' => config_path('reportico.php'),
                ]);
        $this->publishes([
                __DIR__.'/assets' => public_path('vendor/reportico'),
            ], 'public');

        //\Route::group(['middleware' => ['web','auth']], function() {
        \Route::group(['middleware' => ['web']], function() {

            \Route::get("reportico", function() 
            {
                return \View::make('reportico::reportico');
            });

            \Route::get("reportico/ajax", function() 
            {
                $engine = \App::make('getReporticoEngine');
                $engine->execute();
                \Session::save();
                die;
            });

            \Route::post("reportico/ajax", function()
            {
                    $engine = \App::make('getReporticoEngine');
                    $engine->execute();
                    \Session::save();
                    die;
            });

            \Route::get("reportico/dbimage", function() 
            {
                if ( !defined("SW_FRAMEWORK_DB_DRIVER") )
                {
                        define('SW_FRAMEWORK_DB_DRIVER','pdo_mysql');
                        define('SW_FRAMEWORK_DB_USER',"root");
                        define('SW_FRAMEWORK_DB_PASSWORD',"root");
                        define('SW_FRAMEWORK_DB_HOST',"127.0.0.1");
                        define('SW_FRAMEWORK_DB_DATABASE',"iconnex.php");
                }
                include("imageget.php");
            });

            // Run reportico in admin mode
            \Route::get("reportico/admin", function() {
                $engine = \App::make('getReporticoEngine');
                $engine->access_mode = "FULL";
                $engine->initial_execute_mode = "ADMIN";
                $engine->initial_project = "admin";
                $engine->initial_report = false;
                $engine->clear_reportico_session = true;
                $engine->execute();
            });

            // Generate output for a single report
            \Route::get("reportico/execute/{project}/{report}", function($project, $report) {
                $engine = \App::make('getReporticoEngine');
                $engine->access_mode = "REPORTOUTPUT";  // Run single report, no "return button"
                //$this->engine->access_mode = "SINGLEREPORT";  // Run single report, no access to other reports
                //$this->engine->Access_mode = "ONEPROJECT"; // Run single report, but with ability to access other reports

                $engine->initial_execute_mode = "EXECUTE";
                $engine->initial_project = $project;
                $engine->initial_report = $report;
                $engine->clear_reportico_session = true;
                $engine->execute();
            });

            \Route::get("reportico/menu/{project}", function($project) {
                $engine = \App::make('getReporticoEngine');
                //$this->engine->access_mode = "ALLPROJECTS";  // Run single project menu, with access to other reports in other projects
                $engine->access_mode = "ONEPROJECT";
                $engine->initial_project = $project;
                $engine->clear_reportico_session = true;
                $engine->execute();
            });

            \Route::get("reportico/prepare/{project}/{report}", function($project,$report) {
                $this->engine->access_mode = "SINGLEREPORT"; // Allows running of a single report only
                //$this->engine->access_mode = "ONEPROJECT";  // Run single report, but allow access to reports in other projects
                $this->engine->initial_execute_mode = "PREPARE";
                $this->engine->initial_project = $project;
                $this->engine->initial_report = $report;
                if ( !preg_match ( "/.xml$/", $this->engine->initial_report ) )
                    $this->engine->initial_report .= ".xml" ;

                $this->engine->clear_reportico_session = true;
                $this->engine->execute();
            });

        });
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $app = $this->app;

        $this->app['getReporticoEngine'] = $this->app->share(function($app)
        {
            $this->engine = new reportico();

            $this->engine->reportico_ajax_script_url = $_SERVER["SCRIPT_NAME"]."/reportico/ajax";
            $this->engine->forward_url_get_parameters = false;
            //$this->engine->forward_url_get_parameters_graph = "reportico/graph";
            //$this->engine->forward_url_get_parameters_dbimage = "reportico/dbimage";

            // Inficate 'path' mechanism for controllers in stead of 'get'
            $this->engine->reportico_ajax_mode = 2;

            $this->engine->embedded_report = true;
            $this->engine->allow_debug = true;
            $this->engine->framework_parent = config("reportico.framework_type");

            if ( \Auth::user() )
                $this->engine->external_user = \Auth::user()->id;
            else
                $this->engine->external_user = false;
            $this->engine->url_path_to_assets = $this->app["url"]->asset(config("reportico.path_to_assets"));

            
            // Where to store reportco projects
            $this->engine->projects_folder = config("reportico.path_to_projects");
            if ( $this->engine->projects_folder && !is_dir($this->engine->projects_folder) )
            {
                \File::makeDirectory($this->engine->projects_folder, 0777, true);
            }
            $this->engine->admin_projects_folder = config("reportico.path_to_admin");

            // Indicates whether report output should include a refresh button
            $this->engine->show_refresh_button = config("reportico.show_refresh_button");

            // Jquery already included?
            $this->engine->jquery_preloaded = config("reportico.jquery_preloaded");

            // Bootstrap Features
            // Set bootstrap_styles to false for reportico classic styles, or "3" for bootstrap 3 look and feel and 2 for bootstrap 2
            // If you are embedding reportico and you have already loaded bootstrap then set bootstrap_preloaded equals true so reportico
            // doestnt load it again.
            $this->engine->bootstrap_styles = config("reportico.bootstrap_styles");
            $this->engine->bootstrap_preloaded = config("reportico.bootstrap_preloaded");

            // In bootstrap enable pages, the bootstrap modal is by default used for the quick edit buttons
            // but they can be ignored and reportico's own modal invoked by setting this to true
            $this->engine->force_reportico_mini_maintains = config("reportico.force_reportico_maintain_modals");

            // Engine to use for charts .. 
            // HTML reports can use javascript charting, PDF reports must use PCHART
            $this->engine->charting_engine = config("reportico.charting_engine");
            $this->engine->charting_engine_html = config("reportico.charting_engine_html");

            // Engine to use for PDF reports .. 
            $this->engine->pdf_engine = config("reportico.pdf_engine");

            // Whether to turn on dynamic grids to provide searchable/sortable reports
            $this->engine->dynamic_grids = config("reportico.dynamic_grids");
            $this->engine->dynamic_grids_sortable = config("reportico.dynamic_grids_sortable");
            $this->engine->dynamic_grids_searchable = config("reportico.dynamic_grids_searchable");
            $this->engine->dynamic_grids_paging = config("reportico.dynamic_grids_paging");
            $this->engine->dynamic_grids_page_size = config("reportico.dynamic_grids_page_size");

            // Show or hide various report elements
            $this->engine->output_template_parameters["show_hide_navigation_menu"] = config("reportico.show_hide_navigation_menu");
            $this->engine->output_template_parameters["show_hide_dropdown_menu"] = config("reportico.show_hide_dropdown_menu");
            $this->engine->output_template_parameters["show_hide_report_output_title"] = config("reportico.show_hide_report_output_title");
            $this->engine->output_template_parameters["show_hide_prepare_section_boxes"] = config("reportico.show_hide_prepare_section_boxes");
            $this->engine->output_template_parameters["show_hide_prepare_pdf_button"] = config("reportico.show_hide_prepare_pdf_button");
            $this->engine->output_template_parameters["show_hide_prepare_html_button"] = config("reportico.show_hide_prepare_html_button");
            $this->engine->output_template_parameters["show_hide_prepare_print_html_button"] = config("reportico.show_hide_prepare_print_html_button");
            $this->engine->output_template_parameters["show_hide_prepare_csv_button"] = config("reportico.show_hide_prepare_csv_button");
            $this->engine->output_template_parameters["show_hide_prepare_page_style"] = config("reportico.show_hide_prepare_page_style");

            // Static Menu definition
            // ======================
            $this->engine->static_menu = config("reportico.static_menu");

            // Dropdown Menu definition
            // ========================
            $this->engine->dropdown_menu = config("reportico.dropdown_menu");

            $defaultconnection = config("database.default");
            $useConnection = false;
            if ( $defaultconnection )
                $useConnection = config("database.connections.$defaultconnection");
            else
                $useConnection = array(
                        "driver" => "unknown",
                        "dbname" => "unknown",
                        "user" => "unknown",
                        "password" => "unknown",
                        );

            $this->engine->available_connections = config("database.connections");
            $this->engine->external_connection = \DB::connection()->getPdo();

            // Set CSRF Token
            if ( !csrf_token() )
                $this->engine->csrfToken = "unknown_csrf";
            else
                $this->engine->csrfToken = csrf_token() ;

            return $this->engine;
        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('reportico.getReporticoEngine', 'reportico.getReporticoEngine');
	}


    public function preinit()
    {
    }

    public function init()
    {
    }

    public function getReporticoEngine()
    {
    }

    // Generate output
    public function generate()
    {
        $this->engine->execute();
    }
}
