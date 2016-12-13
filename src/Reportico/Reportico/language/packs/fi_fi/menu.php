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

 * File:        menu.php
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
    "language" => "Finnish",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "Valitse kieli",
        "T_GO" => "Suorita",
        "T_LOGGED_IN_AS" => "Kirjautuneena",
        "T_LOGIN" => "Kirjaudu",
        "T_LOGOFF" => "Kirjaudu ulos",
        "T_ADMIN_HOME" => "Ylläpito",
        "T_CONFIG_PROJECT" => "Projektin asetukset",
        "T_CREATE_REPORT" => "Luo raportti",
        "T_ENTER_PROJECT_PASSWORD" => "Anna projektin salasana.",
        "T_ENTER_PROJECT_PASSWORD_DEMO" => "Anna projektin salasana. <br>Opetusohjelmien salasana on <b>reportico</b>",
        "T_UNABLE_TO_CONTINUE" => "toimintoa ei voida jatkaa",
        "T_PASSWORD_ERROR" => "Virheellinen salasana. Yritä uudelleen.",
        ),
    );
?>
