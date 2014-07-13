<?php
class ReportController extends Controller
{
    public $engine = false;

    function __construct($id,$module=null) {
	$this->engine = $module->getReporticoEngine();
        parent::__construct($id,$module);
    }

    public function actionTutorialsMenu()
    {
	$this->engine->access_mode = "ONEPROJECT";
	$this->engine->initial_execute_mode = "MENU";
	$this->engine->initial_project = "tutorials";
	$this->engine->clear_reportico_session = true;
	$this->render('reportico.views.reportico.reportico');
    }

    public function actionFilms()
    {
	$this->engine->access_mode = "REPORTOUTPUT";
	$this->engine->initial_execute_mode = "EXECUTE";
	$this->engine->initial_project = "tutorials";
	$this->engine->initial_report = "tut1_films.xml";
	$this->engine->clear_reportico_session = true;
	$this->render('reportico.views.reportico.reportico');
    }

    public function actionHorrorFilms()
    {
	$this->engine->access_mode = "REPORTOUTPUT";
	$this->engine->initial_execute_mode = "EXECUTE";
	$this->engine->initial_project = "tutorials";
	$this->engine->initial_report = "tut1_films.xml";
	$this->engine->initial_report = "tut1_films.xml";
	$this->engine->initial_execution_parameters["category"] = "Horror";
	$this->engine->clear_reportico_session = true;
	$this->render('reportico.views.reportico.reportico');
    }
}
