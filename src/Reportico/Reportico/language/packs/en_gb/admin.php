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

 * File:        admin.php
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
        "T_CHOOSE_LANGUAGE" => "Choose Language",
        "T_ADMINTITLE" => "Reportico Administration Page",
        "T_LOGGED_IN_AS" => "Logged in as",
        "T_LOGIN" => "Enter Design Mode",
        "T_OPEN_LOGIN" => "Enter Design Mode",
        "T_LOGOFF" => "Exit Design Mode",
        "T_OPEN_LOGOFF" => "Exit Design Mode",
        "T_ENTER_PROJECT_PASSWORD" => "Enter the project password.",
        "T_ADMIN_INSTRUCTIONS" =>
                "Select a report suite from the dropdown below or enter the Reportico Administrator Password to start designing Reportico reports.",
        "T_SET_ADMIN_PASSWORD_INFO" =>
            "Administrator password not currently set.<br>You need to set a password to start using Reportico and <br>access Reportico's Administrative functions<br> Please enter your chosen password:",
        "T_ADMIN_PASSWORD_NOT_SET" => "Administrator password not currently set.",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Administrative Password",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Reenter<br>Administrative Password",
        "T_SET_ADMIN_PASSWORD" => "Set Admin Password",
        "T_RUN_SUITE" => "Run Project Report Suite:",
        "T_CREATE_REPORT" => "Create Report in Project:",
        "T_CONFIG_PARAM" => "Configure Parameters for Project :",
        "T_DELETE_PROJECT" => "Delete Project :",
        "T_DOCUMENTATION" => "Documentation",
        "T_GO" => "Go",
        "T_UNABLE_TO_CONTINUE" => "Unable To Continue",
        "T_ADMIN_PASSWORD_ERROR" => "Incorrect Password. Try again.",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Create A New Project",
        "T_Configure Tutorials" => "Configure Tutorials",
        ),
        );
?>
