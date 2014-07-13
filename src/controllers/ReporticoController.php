<?php
class ReporticoController extends Controller
{
    public $engine = false;

    function __construct($id,$module=null) {
	$this->engine = $module->getReporticoEngine();
        parent::__construct($id,$module);
    }

    public function actionReportico()
    {
	$this->renderPartial('reportico');
    }

    public function actionAjax()
    {
	$this->renderPartial('reportico');
    }

    public function actionGraph()
    {
	include("dyngraph_pchart.php");
    }

    public function actionDbimage()
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
