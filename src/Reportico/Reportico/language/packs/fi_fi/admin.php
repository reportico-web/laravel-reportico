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
    "language" => "Finnish",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "Valitse kieli ",
        "T_ADMINTITLE" => "Reportico Ylläpito",
        "T_LOGGED_IN_AS" => "Kirjautuneena ",
        "T_LOGIN" => "Kirjaudu",
        "T_LOGOFF" => "Kirjaudu ulos",
        "T_ENTER_PROJECT_PASSWORD" => "Anna projektin salasana.",
        "T_ADMIN_INSTRUCTIONS" =>
                "Valitse kieli ja raporttivalikoima allaolevista valinnoista. Tai anna Reportico Ylläpidon Salasana ja kirjaudu ylläpitosivuille.",
        "T_SET_ADMIN_PASSWORD_INFO" =>
            "Ylläpidon salasanaa ei ole asetettu.<br>Tarvitset salasanan kun aloitat käyttämään Reporticoa ja<br>sen ylläpidon toimintoja<br> Ole hyvä ja valitse salasana: ",
        "T_ADMIN_PASSWORD_NOT_SET" => "Ylläpidon salasanaa ei ole vielä asetettu.",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Ylläpidon salasana",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Toista<br>Ylläpidon salasana",
        "T_SET_ADMIN_PASSWORD" => "Aseta Ylläpidon salasana",
        "T_RUN_SUITE" => "Hallitse raportteja Projektissa ",
        "T_CREATE_REPORT" => "Luo Raportti Projektiin :",
        "T_CONFIG_PARAM" => "Muokkaa Projektin asetuksia :",
        "T_DELETE_PROJECT" => "POISTA Projekti :",
        "T_DOCUMENTATION" => "Dokumentaatio",
        "T_GO" => "OK",
        "T_UNABLE_TO_CONTINUE" => "Toimintoa ei voida jatkaa",
        "T_ADMIN_PASSWORD_ERROR" => "Väärä salasana. Yritä uudelleen.",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Luo uusi Projekti",
        "T_Configure Tutorials" => "Määrittele ja luo Opetusohjelmat",
        "T_OPEN_LOGIN" => "Aloita muokkaaminen",
        "T_OPEN_LOGOFF" => "Lopeta muokkaaminen",
        ),
        );
?>
