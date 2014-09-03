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
        $this->engine->set_project_environment($this->engine->initial_project, $this->engine->projects_folder, $this->engine->admin_projects_folder);

        $datasource = new Reportico\Reportico\reportico_datasource($this->engine->external_connection);
        $datasource->connect();

        $imagesql = $_REQUEST["imagesql"];

        if ( !preg_match("/^select/i", $imagesql ) )
            return;

        $rs = $datasource->ado_connection->Execute($imagesql) 
            or die("Query failed : " . $ado_connection->ErrorMsg());
        $line = $rs->FetchRow();

        //header('Content-Type: image/gif');
        foreach ( $line as $col )
        {
            $data = $col;
            break;
        }
        echo $data;
        return;
    }
}
