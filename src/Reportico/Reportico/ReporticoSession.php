<?php

namespace Reportico\Reportico;

use Reportico\Engine\ReporticoApp;

/**
 * Class to store global var
 * 
 */
class ReporticoSession
{

    private function __construct()
    {}

    private function __clone()
    {}

    // Ensure that sessions from different browser windows on same devide
    // target separate SESSION_ID
    static function setUpReporticoSession()
    {
        echo "DIE!";
        die;
        // Get current session
        $session_name = session_id();

        // Check for Posted Session Name and use that if specified
        if (isset($_REQUEST['reportico_session_name'])) {
            $session_name = $_REQUEST['reportico_session_name'];
            if (preg_match("/_/", $session_name)) {
                $ar = explode("_", $session_name);
                ReporticoApp::set("session_namespace", $ar[1]);
                if (ReporticoApp::get("session_namespace")) {
                    ReporticoApp::set("session_namespace_key", "reportico_" . ReporticoApp::get("session_namespace"));
                }

                // Set session to join only if it is not NS meaning its called from framework and existing session
                // should be used
                if ($ar[0] != "NS") {
                    $session_name = $ar[0];
                }

            }
        }

        // If the session_name starts with NS_ then it is a namespace for reportico
        // embedded in a framework or for multiple concurrent reportico instances
        // , so set the current namespace. All sessiion variables for this namespace
        // will be stored in a namspaces specific session array
        if (strlen($session_name) >= 3 && substr($session_name, 0, 3) == "NS_") {
            if (!$session_name || !isset($_SESSION)) {
                session_start();
            }

            ReporticoApp::set("session_namespace", substr($session_name, 3));

            // IF NS_NEW passed then autogenerate session namespace from current time
            if (ReporticoApp::get("session_namespace") == "NEW") {
                ReporticoApp::set("session_namespace", date("YmdHis"));
            }
            if (ReporticoApp::get("session_namespace")) {
                ReporticoApp::set("session_namespace_key", "reportico_" . ReporticoApp::get("session_namespace"));
            }

            if (isset($_REQUEST['clear_session']) && isset($_SESSION)) {
                self::initializeReporticoNamespace(self::reporticoNamespace());
            }
            return;
        }

        // If no current session start one, or if request to clear session (it really means clear namespace)
        // then clear this out
        if (!$session_name || isset($_REQUEST['clear_session'])) {
            // If no session current then create a new one
            if (!$session_name || !isset($_SESSION)) {
                session_start();
            }

            if (isset($_REQUEST['new_session']) && $_REQUEST['new_session']) {
                session_regenerate_id(false);
            }

            //unsetReporticoSessionParam("template");
            //session_regenerate_id(false);
            $session_name = session_id();
            
            if (isset($_REQUEST['clear_session'])) {
                self::initializeReporticoNamespace(self::reporticoNamespace());
            }
        } else {
            if (session_id() != $session_name) {
                session_id($session_name);
                session_start();
            }
            $session_name = session_id();
        }
        
        ReporticoLog::debug("Final session name : $session_name");
    }

    /**
     * Does global reportico session exist
     * 
     * @return bool
     */
    static function existsReporticoSession()
    {
        $session_namespace_key = self::reporticoNamespace();
        return $session_namespace_key;
    }
    
    /*
     * Cleanly shuts doen session
     */
    static function closeReporticoSession()
    {
    }

    static function sessionItem($in_item, $in_default = false)
    {
        $ret = false;
        if (self::issetReporticoSessionParam($in_item)) {
            $ret = self::getReporticoSessionParam($in_item);
        }

        if (!$ret) {
            $ret = false;
        }

        if ($in_default && !$ret) {
            $ret = $in_default;
        }

        self::setReporticoSessionParam($in_item, $ret);

        return ($ret);
    }

    static function sessionRequestItem($in_item, $in_default = false, $in_default_condition = true)
    {
        $ret = false;
        if (self::issetReporticoSessionParam($in_item)) {
            $ret = self::getReporticoSessionParam($in_item);
        }

        if (array_key_exists($in_item, $_REQUEST)) {
            $ret = $_REQUEST[$in_item];
        }

        if (!$ret) {
            $ret = false;
        }

        if ($in_default && $in_default_condition && !$ret) {
            $ret = $in_default;
        }

        self::setReporticoSessionParam($in_item, $ret);

        return ($ret);
    }

    /**
     * Check if a particular reeportico session parameter is set
     * using current session namespace
     * 
     * @param string $param Session parameter name
     * @param string $session_name Session name
     * 
     * @return bool 
     */
    static function issetReporticoSessionParam($param, $session_name = false)
    {
        $session_namespace_key = self::reporticoNamespace();
        return \Session::has("$session_namespace_key.$param");
    }

    /**
     * Sets a reportico session_param using current session namespace
     * 
     * @param string $param Session parameter name
     * @param mixed $value Session parameter value
     * @param string $namespace Namespace session
     * @param array|bool ???? 
     * 
     * @return void
     */
    static function setReporticoSessionParam($param, $value, $namespace = false, $array = false)
    {

        $session_namespace_key = self::reporticoNamespace();
        \Session::put("$session_namespace_key.$param", $value);

        if ( $param == "peter" )
        \Session::put("peter", "yes".(new \Datetime())->format("H:i:s"));
        //echo " and ".self::getReporticoSessionParam("peter");
    }

    /**
     * Return the value of a reportico session_param
     * using current session namespace
     * 
     * @param string $param Session parameter name
     * 
     * @return mixed
     */
    static function getReporticoSessionParam($param)
    {
        $session_namespace_key = self::reporticoNamespace();
        if ( \Session::has("$session_namespace_key.$param" ) )
            return \Session::get("$session_namespace_key.$param");
        else
            return false;
    }

    /**
     * Clears a reportico session_param using current session namespace
     * 
     * @param string $param Session parameter name
     * @return void
     */
    static function unsetReporticoSessionParam($param)
    {
        $session_namespace_key = self::reporticoNamespace();
        if ( \Session::has("$session_namespace_key.$param" ) )
            \Session::forget("$session_namespace_key.$param");
    }

    /*
     **
     ** Register a session variable which will remain persistent throughout session
     */
    static function registerSessionParam($param, $value)
    {
        if (!self::issetReporticoSessionParam($param)) {
            self::setReporticoSessionParam($param, $value);
        }

        return self::getReporticoSessionParam($param);
    }

    /*
     ** Returns the current session name.
     ** Session variables exist
     ** using current session namespace
     */
    static function reporticoSessionName()
    {
        //if ( ReporticoApp::get("session_namespace") )
        if (self::getReporticoSessionParam("framework_parent")) {
            return "NS_" . self::reporticoNamespace();
        } else {
            return self::reporticoNamespace();
        }

    }

    /*
     ** Returns the current namespace
     */
    static function reporticoNamespace()
    {
        
        $namespace = ReporticoApp::get("session_namespace_key");
        if ( !$namespace ) {
            // No current namespace look in url parameters
            $namespace = "reportico";
            if (array_key_exists("reportico_session_name", $_REQUEST)) 
                $namespace = $_REQUEST["reportico_session_name"];
            if ( preg_match("/^NS_/", $namespace))
                $namespace = substr($namespace, 3);
            ReporticoApp::set("session_namespace_key", $namespace);
        }
        return $namespace;
    }

    /*
     ** initializes a reportico namespace
     **
     */
    static function initializeReporticoNamespace($namespace)
    {
        if ( \Session::has($namespace) )
            \Session::forget($namespace);
        \Session::put($namespace, array());
        \Session::put("$namespace.awaiting_initial_defaults", true);
        \Session::put("$namespace.firsttimeIn", true);
    }
}
