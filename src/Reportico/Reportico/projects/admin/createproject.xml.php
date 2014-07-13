<?php  namespace Reportico\Reportico;
/*
 Reportico - PHP Reporting Tool
 Copyright (C) 2010-2013 Peter Deed

 This program is free software; you can redistribute it and/or
 modify it under the terms of the GNU General Public License
 as published by the Free Software Foundation; either version 2
 of the License, or (at your option) any later version.
 
 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with this program; if not, write to the Free Software
 Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 * File:        createproject.xml.php
 *
 * This is the core Reportico Reporting Engine. The main 
 * reportico class is responsible for coordinating
 * all the other functionality in reading, preparing and
 * executing Reportico reports as well as all the screen
 * handling.
 *
 * @link http://www.reportico.co.uk/
 * @copyright 2010-2013 Peter Deed
 * @author Peter Deed <info@reportico.org>
 * @package Reportico
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 * @version : reportico.php,v 1.58 2013/04/24 22:03:22 peter Exp $
 */
// Extract Criteria Options
$type = $_criteria["dbtype"]->get_criteria_value("VALUE", false);
$name = $_criteria["database"]->get_criteria_value("VALUE", false);
$host = $_criteria["host"]->get_criteria_value("VALUE", false);
$server = $_criteria["server"]->get_criteria_value("VALUE", false);
$user = $_criteria["user"]->get_criteria_value("VALUE", false);
$password = $_criteria["password"]->get_criteria_value("VALUE", false);
$protocol = $_criteria["protocol"]->get_criteria_value("VALUE", false);
$baseurl = $_criteria["baseurl"]->get_criteria_value("VALUE", false);
$project = $_criteria["project"]->get_criteria_value("VALUE", false);
$title = $_criteria["projtitle"]->get_criteria_value("VALUE", false);

if ( !$title ) { trigger_error ( "Specify Project Title" ); return; }
if ( !$type ) { trigger_error ( "Specify Database Type" ); return; }
if ( !$project ) { trigger_error ( "Specify Project Name" ); return; }
if ( !$name ) { trigger_error ( "Specify Database Name" ); return; }
if ( !$host ) { trigger_error ( "Specify Database Host" ); return; }
if ( !$user ) { trigger_error ( "Specify Database User" ); return; }
//if ( !$password ) { trigger_error ( "Specify Database Type" ); return; }
if ( !$baseurl ) { trigger_error ( "Specify Base URL" ); return; }
global $g_debug_mode;
$g_debug_mode = true;
;

$test = new reportico_datasource("array", "localhost");

$test->driver = $type;
$test->user_name = $user;
$test->password = $password;
$test->host_name = $host;
$test->database = $name;
$test->server = $server;
$test->protocol = $protocol;
$test->connect(true);

if ( $test->connected )
    handle_debug("Connection to Database succeeded", 0);
else
   trigger_error("Connection to Database failed");

$proj_parent = find_best_location_in_include_path( "projects" );
$proj_dir = $proj_parent."/$project";
$proj_conf = $proj_dir."/config.php";
$proj_menu = $proj_dir."/menu.php";
$proj_lang = $proj_dir."/lang.php";

$proj_template = $proj_parent."/admin/config.template";
$menu_template = $proj_parent."/admin/menu.template";
$lang_template = $proj_parent."/admin/lang.template";


if ( !file_exists ( $proj_parent ) )
{
    trigger_error ("Projects area $proj_parent does not exist - cannot write project");
    return;
}

if ( !is_writeable ( $proj_parent  ) )
{
    trigger_error ("Projects area $proj_parent is not writeable - cannot write project");
    return;
}

if ( file_exists ( $proj_dir ) )
{
    trigger_error ("Projects area $proj_dir already exists - cannot write project");
    return;
}
else
if ( !mkdir ( $proj_dir ) )
{
    trigger_error ("Failed to create project directory $proj_dir");
    return;
}

if ( !is_writeable ( $proj_dir ) )
{
   if ( ! chmod ( $proj_dir, "u+rwx") )
   {
    trigger_error ("Failed to make project directory $proj_dir writeable ");
    return;
   }
}


$txt = file_get_contents($proj_template);
$txt = preg_replace ( "/<<BASEURL>>/", $baseurl, $txt);
$txt = preg_replace ( "/<<DRIVER>>/", $type, $txt);
$txt = preg_replace ( "/<<DBPASSWORD>>/", $password, $txt);
$txt = preg_replace ( "/<<DBHOST>>/", $host, $txt);
$txt = preg_replace ( "/<<DBSERVER>>/", $server, $txt);
$txt = preg_replace ( "/<<DBNAME>>/", $name, $txt);
$txt = preg_replace ( "/<<DBPROTOCOL>>/", $protocol, $txt);
$txt = preg_replace ( "/<<DBUSER>>/", $user, $txt);
echo "<PRE>";
echo $txt;
echo "</PRE>";
    trigger_error ("Failed to create project directory $proj_dir");
    return;

$retval = file_put_contents($proj_conf, $txt);

$txt = file_get_contents($menu_template);
$txt = preg_replace ( "/<<PROJTITLE>>/", $title, $txt);
$retval = file_put_contents($proj_menu, $txt);
$txt = file_get_contents($lang_template);
$retval = file_put_contents($proj_lang, $txt);


handle_debug("Project Created", 0);


?>
