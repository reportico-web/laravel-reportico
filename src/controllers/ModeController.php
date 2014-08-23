<?php
/*
** ModeController -
** Generates reportico in a number of different modes:0-
** - Admin
*/
class ModeController extends BaseController
{
    public $engine = false;
    public $partialRender = false;
    public $defaultAction = 'admin';

    function __construct() {
        $this->engine= App::make("getReporticoEngine");
        $this->engine->bootstrap_styles = "3";
        $this->engine->bootstrap_preloaded = false;
        $bootstrap_styles = Input::get('reportico_bootstrap_styles');
        if ( $bootstrap_styles )
        {
            if ( $bootstrap_styles == "none" )
                $this->engine->bootstrap_styles = false;
            else
                $this->engine->bootstrap_styles = $bootstrap_styles;
        }
        $this->engine->bootstrap_preloaded = Input::get('reportico_bootstrap_preloaded');
        $this->engine->jquery_preloaded = Input::get('reportico_jquery_preloaded');
        $this->engine->embedded_report = Input::get('reportico_ajax_request');
    }

    // Run reportico in admin mode
    public function admin() {
        $this->engine->access_mode = "FULL";
        $this->engine->initial_execute_mode = "ADMIN";
        $this->engine->initial_project = "admin";
        $this->engine->initial_report = false;
        $this->engine->clear_reportico_session = true;
        $this->engine->execute();
    }

    // Generate output for a single report
    public function execute($project=false, $report=false) {
        $this->engine->access_mode = "REPORTOUTPUT";  // Run single report, no "return button"
        //$this->engine->access_mode = "SINGLEREPORT";  // Run single report, no access to other reports
        //$this->engine->Access_mode = "ONEPROJECT"; // Run single report, but with ability to access other reports

        $this->engine->initial_execute_mode = "EXECUTE";
        $project = Input::get('project');
        $report = Input::get('report');
        $this->engine->initial_project = $project;
        $this->engine->initial_report = $report;
        $this->engine->clear_reportico_session = true;
        $this->engine->execute();
    }

    public function menu() {

        $project = Input::get('project');
        //j$this->engine->access_mode = "ALLPROJECTS";  // Run single project menu, with access to other reports in other projects
        $this->engine->access_mode = "ONEPROJECT";
        $this->engine->initial_project = $project;
        $this->engine->clear_reportico_session = true;
        $this->engine->execute();
    }

    public function prepare()
    {
        $project = Input::get('project');
        $report = Input::get('report');
        $this->engine->access_mode = "SINGLEREPORT"; // Allows running of a single report only
        //$this->engine->access_mode = "ONEPROJECT";  // Run single report, but allow access to reports in other projects
        $this->engine->initial_execute_mode = "PREPARE";
        $this->engine->initial_project = $project;
        $this->engine->initial_report = $report;
        if ( !preg_match ( "/.xml$/", $this->engine->initial_report ) )
            $this->engine->initial_report .= ".xml" ;

        $this->engine->clear_reportico_session = true;
        $this->engine->execute();
    }
}
