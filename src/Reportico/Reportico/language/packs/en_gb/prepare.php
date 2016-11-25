<?php
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

 * File:        prepare.php
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
$locale_arr = array (
   "language" => "English",
   "template" => array (
        "T_PROJECT_MENU" => "Project Menu",
        "T_ADMIN_MENU" => "Admin Menu",
        "T_DESIGN_REPORT" => "Design Report",
        "T_EXPAND" => " ",
        "T_LOGIN" => "Log In",
        "T_LOGOFF" => "Log Off",
        "T_GO" => "Go",
        "T_RESET" => "Reset",
        "T_SEARCH" => "Search",
        "T_SHOW" => "Show",
        "T_SHOW_CRITERIA" => "Criteria",
        "T_SHOW_GRAPH" => "Graph",
        "T_SHOW_GRPHEADERS" => "Group Headers",
        "T_SHOW_GRPTRAILERS" => "Group Trailers",
        "T_SHOW_COLHEADERS" => "Column Headers",
        "T_SHOW_DETAIL" => "Detail",
        "T_OUTPUT" => "Output:",
        "T_DEBUG_LEVEL" => "Debug Level:",
        "T_DEBUG_NONE" => "None",
        "T_DEBUG_LOW" => "Low",
        "T_DEBUG_MEDIUM" => "Medium",
        "T_DEBUG_HIGH" => "High",
        "T_ENTER_PROJECT_PASSWORD" => "Enter the project password.",
        "T_DEFAULT_REPORT_DESCRIPTION" =>
                "&nbsp<br>".
                "Enter Your Report Criteria Here. To enter criteria use the appropriate expand key.".
                "When you are happy select the appropriate output format and click OK.",
        "T_PASSWORD_ERROR" => "Incorrect Password. Try again.",
        "T_OK" => "Ok",
        "T_CLEAR" => "Clear",
        "T_SELECTALL" => "Select All",
        "T_UNABLE_TO_CONTINUE" => "Unable To Continue",
        "T_Create A New Project" => "Create A New Project",
        "T_Configure Project" => "Configure Project",
        "T_Configure Tutorials" => "Configure Tutorials",
        "T_PRINTABLE" => "Generate HTML report in new browser window",
        "T_PRINT_XML" => "Generate XML Output",
        "T_PRINT_HTML" => "Generate HTML Report",
        "T_PRINT_PDF" => "Generate PDF Report",
        "T_PRINT_CSV" => "Generate CSV Report",
        "T_PRINT_JSON" => "Generate JSON Report",
        "T_PRINT_GRID" => "Generate Grid Report",
        "T_STYLE_FORM" => "Form Output",
        "T_FORM" => "Form",
        "T_TABLE" => "Table",
        "T_REPORT_STYLE" => "Style",
        "T_EDITASSIGNMENT" => "Assignments",
        "T_EDITGROUPS" => "Groups",
        "T_EDITGRAPHS" => "Graphs",
        "T_EDITPAGEHEADERS" => "Page Headers",
        "T_EDITPAGEFOOTERS" => "Page Footers",
        "T_EDITGROUPHEADERS" => "Group Headers",
        "T_EDITGROUPTRAILERS" => "Group Trailers",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_EDITTITLE" => "Title",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Criteria",
        "T_EDITCOLUMNS" => "Columns",
        "T_EDIT" => "Edit",
        "T_NOTICE" => "Notice",
        "T_SHOW_CONTENT" => "Show Content",
        "T_SAVE" => "Save",
        "T_REPORT_FILE" => "Report File",
        "T_NEW_REPORT" => "New Report",

        ),
        );
?>
