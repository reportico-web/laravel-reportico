<?php
/*
** ReporticoController -
** Controllers for base reportico functions like graphs and dbimages
** - Admin
*/
class ReporticoController extends BaseController
{
    public $engine = false;
    public $partialRender = false;

    function __construct() {
        $this->engine= App::make("getReporticoEngine");
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

    public function reportico()
    {
        $this->engine->clear_reportico_session = true;
        $this->engine->execute();
    }

    public function ajax()
    {
        $this->engine->execute();
    }

    public function graph()
    {
	    include(__DIR__."/../Reportico/Reportico/dyngraph_pchart.php");
    }

    public function dbimage()
    {
	    include(__DIR__."/../Reportico/Reportico/imageget.php");
    }
}
