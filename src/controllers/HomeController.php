<?php

class HomeController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function showProfile2()
    {
        $engine= App::make("getReporticoEngine");
        $engine->execute();

       //return View::make('reportico::reportico');
        //return View::make('reportico::reportico');
        //$engine= App::make("getReporticoEngine");
        //$engine = $this->getReporticoEngine();
        //$engine->execute();
    }

    public function showMenu() {
        $engine= App::make("getReporticoEngine");

        $engine->access_mode = "ONEPROJECT";
        //$this->engine->access_mode = "ALLPROJECTS";  // Run single project menu, with access to other reports in other projects
        //$this->engine->Access_mode = "ONEPROJECT"; // Run single report, but with ability to access other reports
        $engine->initial_execute_mode = "MENU";
        $engine->initial_project = "tutorials";

        $engine->clear_reportico_session = true;
        $engine->execute();
    }

}
