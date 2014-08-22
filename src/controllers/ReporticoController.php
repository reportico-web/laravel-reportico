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
    }

    public function reportico()
    {
        $this->engine->bootstrap_preloaded = false;
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
