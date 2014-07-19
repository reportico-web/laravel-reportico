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
	    // Set Joomla Database Access Config from configuration
	    if ( !defined("SW_FRAMEWORK_DB_DRIVER") )
	    {
            define('SW_FRAMEWORK_DB_DRIVER','pdo_mysql');
            define('SW_FRAMEWORK_DB_USER',Yii::app()->db->username);
            define('SW_FRAMEWORK_DB_PASSWORD',Yii::app()->db->password);
            define('SW_FRAMEWORK_DB_HOST',"127.0.0.1");
            define('SW_FRAMEWORK_DB_DATABASE',"reportico");
	    }

	    include("imageget.php");
    }
}
