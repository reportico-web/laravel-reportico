<?php
class DefaultController extends Controller
{
    public $engine = false;
    public $partialRender = true;

    function __construct($id,$module=null) {
        $this->engine = $module->getReporticoEngine();
        $this->partialRender = Yii::app()->request->getQuery("partialReportico", true);
        parent::__construct($id,$module);
    }

	public function actionIndex()
	{
		$this->engine->access_mode = "FULL";
		$this->engine->initial_execute_mode = "ADMIN";
		$this->engine->initial_project = "admin";
		$this->engine->initial_report = false;
		$this->engine->clear_reportico_session = true;

        // Indicates whether report output should include a refresh button
        //$this->engine->show_refresh_button = false;

        // Jquery already included?
        //$this->engine->jquery_preloaded = false;

        // Bootstrap Features
        // Set bootstrap_styles to false for reportico classic styles, or "3" for bootstrap 3 look and feel and 2 for bootstrap 2
        // If you are embedding reportico and you have already loaded bootstrap then set bootstrap_preloaded equals true so reportico
        // doestnt load it again.
        $this->engine->bootstrap_styles = "3";
        $this->engine->bootstrap_preloaded = false;

        // In bootstrap enable pages, the bootstrap modal is by default used for the quick edit buttons
        // but they can be ignored and reportico's own modal invoked by setting this to true
        //$this->engine->force_reportico_mini_maintains = false;

        // Engine to use for charts .. 
        // HTML reports can use javascript charting, PDF reports must use PCHART
        //$this->engine->charting_engine = "PCHART";
        //$this->engine->charting_engine_html = "NVD3";

        // Whether to turn on dynamic grids to provide searchable/sortable reports
        // $this->engine->dynamic_grids = true;
        // $this->engine->dynamic_grids_sortable = true;
        // $this->engine->dynamic_grids_searchable = true;
        // $this->engine->dynamic_grids_paging = false;
        // $this->engine->dynamic_grids_page_size = 10;

        // Show or hide various report elements
        //$this->engine->output_template_parameters["show_hide_navigation_menu"] = "show";
        //$this->engine->output_template_parameters["show_hide_dropdown_menu"] = "show";
        //$this->engine->output_template_parameters["show_hide_report_output_title"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_section_boxes"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_pdf_button"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_html_button"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_print_html_button"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_csv_button"] = "show";
        //$this->engine->output_template_parameters["show_hide_prepare_page_style"] = "show";

        // Static Menu definition
        // ======================
        // identifies the items that will show in the middle of the project menu page.
        // If not set will use the project level menu definitions in project/projectname/menu.php
        // To have no static menu ( for example if you just want to use a drop down then set to empty array )
        // To define a static menu, follow the example here.
        // report can be a valid report file ( without the xml suffix ).
        // If title is left as AUTO then the title will be taken form the report definition
        // Use title of BLANKLINE to separate items and LINE to draw a horizontal line separator

        //$this->engine->static_menu = array (
	        //array ( "report" => "an_xml_reportfile1", "title" => "<AUTO>" ),
	        //array ( "report" => "another_reportfile", "title" => "<AUTO>" ),
	        //array ( "report" => "", "title" => "BLANKLINE" ),
	        //array ( "report" => "anotherfreportfile", "title" => "Custom Title" ),
	        //array ( "report" => "", "title" => "BLANKLINE" ),
	        //array ( "report" => "andanother", "title" => "Another Custom Title" ),
	    //);
    
        // To auto generate a static menu from all the xml report files in the project use
        //$this->engine->static_menu = array ( array ( "report" => ".*\.xml", "title" => "<AUTO>" ) );
    
        // To hide the static report menu
        //$this->engine->static_menu = array ();

        // Dropdown Menu definition
        // ========================
        // Menu items for the drop down menu
        // Enter definition for the the dropdown menu options across the top of the page
        // Each array element represents a dropdown menu across the page and sub array items for each drop down
        // You must specifiy a project folder for each project entry and the reportfile definitions must point to a valid xml report file
        // within the specified project
        //$this->engine->dropdown_menu = array(
        //                array ( 
        //                    "project" => "projectname",
        //                    "title" => "dropdown menu 1 title",
        //                    "items" => array (
        //                        array ( "reportfile" => "report" ),
        //                        array ( "reportfile" => "anotherreport" ),
        //                        )
        //                    ),
        //                array ( 
        //                    "project" => "projectname",
        //                    "title" => "dropdown menu 2 title",
        //                    "items" => array (
        //                        array ( "reportfile" => "report" ),
        //                        array ( "reportfile" => "anotherreport" ),
        //                        )
        //                    ),
        //            );


		if ( $this->partialRender )
		    $this->renderPartial('reportico.views.reportico.index');
		else
		    $this->render('reportico.views.reportico.index');
	}

	public function actionLogin()
	{
		$this->render('index');
	}
}
