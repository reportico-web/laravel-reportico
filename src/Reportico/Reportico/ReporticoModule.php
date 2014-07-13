<?php

class ReporticoModule extends CWebModule
{
    public $engine;
    private $_assetsUrl;

    public function preinit()
    {
    }

    function getAssetsUrl()
    {
        if ($this->_assetsUrl === null)
            $this->_assetsUrl = Yii::app()->getAssetManager()->publish(
                Yii::getPathOfAlias('application.modules.reportico.assets') );

        return $this->_assetsUrl;
    }

    public function init()
    {
        // In certain scenarios .. a yii session can be in placed but not started
        // until it is used .. by accessing the session it will be invoked and then reportico
        // can make use of this. otherwise no session is found and reportico will statrt its
        // own one. This has occurred with a CDBHttpSession 
        if ( !Yii::app()->session )
            $_session_not_started = true;

        // this method is called when the module is being created
        // you may place code here to customize the module or the application
        // import the module-level models and components
        $this->setImport(array(
            'reportico.models.*',
            'reportico.components.*',
            'reportico.components.reportico',
        ));

        $component=Yii::createComponent(
            array(
            //component details here
                'class' => 'reportico',
                'peter' => "peter"
            ));
        $this->setComponent("reportico", $component) ;
    }

    // Create an instance of a reportico generator for Yii
    public function getReporticoEngine()
    {
        $this->engine = new reportico();

        $x =  Yii::app()->getUrlManager() ;
        $type = Yii::app()->getUrlManager()->getUrlFormat();
        if ( Yii::app()->getUrlManager()->getUrlFormat() == "get" )
        {
            $this->engine->reportico_ajax_script_url = $_SERVER["SCRIPT_NAME"];
            $this->engine->forward_url_get_parameters = "r=reportico/reportico/ajax";
            $this->engine->forward_url_get_parameters_graph = "r=reportico/reportico/graph";
            $this->engine->forward_url_get_parameters_dbimage = "r=reportico/reportico/dbimage";
            $this->engine->reportico_ajax_mode = 1;
        }
        else
        {
            $this->engine->reportico_ajax_script_url = $_SERVER["SCRIPT_NAME"]."/reportico/reportico/ajax";
            $this->engine->forward_url_get_parameters = false;
            $this->engine->forward_url_get_parameters_graph = "r=reportico/reportico/graph";
            $this->engine->forward_url_get_parameters_dbimage = "r=reportico/reportico/dbimage";
            $this->engine->reportico_ajax_mode = 2;
        }
        $this->engine->embedded_report = true;
        $this->engine->allow_debug = true;
        $this->engine->framework_parent = "yii";
        $this->engine->external_user = Yii::app()->user->id;
        $this->engine->url_path_to_assets = $this->getAssetsUrl();

        // Indicates whether report output should include a refresh button
        //$this->engine->show_refresh_button = false;


        // Jquery already included?
        //$this->engine->jquery_preloaded = false;

        // Bootstrap Features
        // Set bootstrap_styles to false for reportico classic styles, or "3" for bootstrap 3 look and feel and 2 for bootstrap 2
        // If you are embedding reportico and you have already loaded bootstrap then set bootstrap_preloaded equals true so reportico
        // doestnt load it again.
        $this->engine->bootstrap_styles = false;
        //$this->engine->bootstrap_preloaded = false;

        // In bootstrap enable pages, the bootstrap modal is by default used for the quick edit buttons
        // but they can be ignored and reportico's own modal invoked by setting this to true
        $this->engine->force_reportico_mini_maintains = false;

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


        // Set Joomla Database Access Config from configuration
        if ( !defined("SW_FRAMEWORK_DB_DRIVER") )
        {
            // Extract Yii database elements from connection string 
            $driver = "mysql";
            $host = "127.0.0.1";
            $dbname = "unnknown";
            if ( Yii::app()->db->connectionString )
            {
                $dbelements  = explode(':', Yii::app()->db->connectionString);
                if ( count($dbelements) > 1 )
                {
                    $driver = $dbelements[0];
                    $dbconbits = explode(";", $dbelements[1]);
                    if ( preg_match("/mysql/", $driver ) )
                        $driver = "pdo_mysql";

                    foreach ( $dbconbits as $value )
                    {
                        $after = substr(strstr($value, "="), 1);
                        $pos = strpos($value, "=");
                        if ( $pos )
                        {
                            $k = substr($value, 0, $pos);
                            $v = substr($value, $pos + 1);
                            if ( $k == "host" || $k == "hostname" ) 
                                $host = $v;
                            if ( $k == "dbname" || $k == "database" ) 
                                $dbname = $v;
                        }
                    }
                }
            }
            define('SW_FRAMEWORK_DB_DRIVER', $driver);
            define('SW_FRAMEWORK_DB_USER',Yii::app()->db->username);
            define('SW_FRAMEWORK_DB_PASSWORD',Yii::app()->db->password);

            define('SW_FRAMEWORK_DB_HOST',$host);
            define('SW_FRAMEWORK_DB_DATABASE',$dbname);
        }

        return $this->engine;
    }    

    // Generate output
    public function generate()
    {
        $this->engine->execute();
    }
}
