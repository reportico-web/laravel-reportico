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

    /*
     * Cleanly shuts doen session
     */
    static function keepAllSessionData()
    {
        $session_namespace_key = self::reporticoNamespace();
        
        $session_namespace_key = "reportico_reporticocrosstab";
        self::setReporticoSessionParam("XXXXXXXXXXXXXXXXXXXXXXXXXXX", "XXXXXXXXXXXXXXXXXXXXXXXXXXX");
        \Session::put("XXX","YYY");
        \Session::keep(["XXX"]);
        \Session::keep(["$session_namespace_key.XXXXXXXXXXXXXXXXXXXXXXXXXXX"]);
        \Session::flash("$session_namespace_key.xxxxx", "wow");
        self::setReporticoSessionParam("hello1", "goodbye2");

    }

    static function clearAllSessionData()
    {
        $vars = \Session::all() ;
        foreach ($vars as $k => $var ) {
                $subs = \Session::get($k) ;
                if ( preg_match("/^reportico/", $k) )
                    \Session::forget("$k");
        }
    }

    static function showAllSessionData($just_session_names = false)
    {
        echo "SHOW<BR>";
        $vars = \Session::all() ;
        foreach ($vars as $k => $var ) {
                $subs = \Session::get($k) ;
                echo $k." => <BR>";
                //echo gettype($var);
                if ( $k == "reportico_reporticocrosstab" )
                if ( is_object($var) ) {
                }
                if ( $just_session_names ) continue;
                if ( is_array($var) ) {
                    foreach ( $var as $k1 => $sub ) {
                        if ( $k1 == "latestRequest" ) {
                            //echo "LT ".gettype($sub);
                            //if ( is_array($sub) )
                            //foreach ( $sub as $k2 => $v2 ) {
                                //if ( !is_array($v2) )
                                //echo " ===> sub $k2 = $v2<BR>";
                                //else
                                //echo " ===> arr $k2 <BR>";
                            //}
                        } else {
                            if ( is_array($sub) ) {
                                echo "&nbsp;&nbsp;&nbsp;&nbsp;".$k1." => ARRAY <BR>";
                            } else {
                                if ( $sub ) 
                                    echo "&nbsp;&nbsp;&nbsp;&nbsp;".$k1." => $sub <BR>";
                            }
                        }
                    }
                }
        }
    }


    //
    // Return the namespace selected by an external GET or PORT in form
    // sessionid_namespacej
    static function switchToRequestedNamespace($default_namespace)
    {
        $session_name = $default_namespace;

        //echo "SWITCH=============================================<BR>";
        //self::clearAllSessionData();
        //self::showAllSessionData(true);

        // Check for Posted Session Name and use that if specified
        if (isset($_REQUEST['reportico_session_name'])) {
            $session_name = $_REQUEST['reportico_session_name'];
            if (preg_match("/_/", $session_name)) {

                $name = preg_replace("/^[^[_]*_/", "", $session_name);
                $name = preg_replace("/^reportico_/", "", $name);
                ReporticoApp::set("session_namespace", $name);
                if (ReporticoApp::get("session_namespace")) {
                    ReporticoApp::set("session_namespace_key", "reportico_" . ReporticoApp::get("session_namespace"));
                }

                $session_name = $name;
                if ( self::issetReporticoSession($session_name) ) {
                    //echo "EX $session_name<BR>";
                    if ( $session_name != "reportico") {
                        if ( self::issetReporticoSession("reportico_reportico") ) {
                            foreach ( self::getReporticoSession("reportico_reportico") as $key => $value){
                                if ( !self::issetReporticoSessionParam($key) || $key == "permissions" || $key == "awaiting_initial_defaults") {
                                    echo "TRANS $key<BR>";
                                    self::setReporticoSessionParam($key, $value);
                                }
                            }
                        }
                    }
                } else {
                    //echo "SWITCH NOT EXISTS $session_name<BR>";
                    self::initializeReporticoNamespace($session_name);
                    if ( $session_name != "reportico") {
                        if ( self::issetReporticoSession("reportico_reportico") ) {
                            //var_dump(self::getReporticoSession("reportico_reportico"));
                            foreach ( self::getReporticoSession("reportico_reportico") as $key => $value){
                                if ( !self::issetReporticoSessionParam($key) || $key == "permissions" || $key == "awaiting_initial_defaults") {
                                    echo "SWITCH TRANSFER $key<BR>";
                                    self::setReporticoSessionParam($key, $value);
                                }
                            }
                        }
                    }
                }

            } else {
            }
        } else {
            if ( self::issetReporticoSession($session_name) ) {
                //echo "NO MANUAL ALREADY EX $session_name!!!<BR>";
            } else {
                //echo "NO MANUAL NOT EX $session_name!!!<BR>";

                ReporticoApp::set("session_namespace", $session_name);
                if (ReporticoApp::get("session_namespace")) {
                    ReporticoApp::set("session_namespace_key", "reportico_" . ReporticoApp::get("session_namespace"));
                }

                self::initializeReporticoNamespace($session_name);
            }
        }
        return $session_name;
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
    static function issetReporticoSession($session_name)
    {
        return \Session::has("reportico_$session_name");
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
    static function getReporticoSession($session_name)
    {
        return \Session::get("$session_name");
    }

    /**
     * Return the value of a reportico session_param
     * using current session namespace
     * 
     * @param string $param Session parameter name
     * 
     * @return mixed
     */
    static function getReporticoSessionParam($param, $session_name = false )
    {
        $session_namespace_key = self::reporticoNamespace();
        if ( $session_name ) {
            $session_namespace_key = $session_name;
        }
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
        $namespace = ReporticoApp::get("session_namespace_key");
        if ( \Session::has($namespace) )
            \Session::forget($namespace);
        \Session::put($namespace, array());
        \Session::put("$namespace.awaiting_initial_defaults", true);
        \Session::put("$namespace.firsttimeIn", true);
    }
}
