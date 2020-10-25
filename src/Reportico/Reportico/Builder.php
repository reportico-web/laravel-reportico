<?php

namespace Reportico\Reportico;

use Reportico\Engine\ReporticoApp;

/**
 * Class to store global var
 * 
 */
class Builder
{
    /*
     * Instantiate an instance of Reportico Builder in standalone mode
     */
    static function _build($session = "") {
        
        $engine= \App::make("getReporticoEngine");

        if (!$session)
            $engine->clear_reportico_session = 1;
        $engine->session($session);
        $builder  = new \Reportico\Engine\Builder($engine);
        return $builder;

    }
}
