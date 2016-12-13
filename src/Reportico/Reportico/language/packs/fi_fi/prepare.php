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
   "language" => "Finnish",
   "template" => array (
        "T_PROJECT_MENU" => "Projektin Valikko",
        "T_ADMIN_MENU" => "Ylläpito",
        "T_DESIGN_REPORT" => "Muokkaa Raporttia",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Kirjaudu",
        "T_LOGOFF" => "Kirjaudu ulos",
        "T_GO" => "Suorita",
        "T_RESET" => "Tyhjennä valinnat",
        "T_SEARCH" => "Etsi: ",
        "T_SHOW" => "Näytä: ",
        "T_SHOW_CRITERIA" => "Valinnat",
        "T_SHOW_GRAPH" => "Grafiikka",
        "T_SHOW_GRPHEADERS" => "Ryhmän yläotsikot",
        "T_SHOW_GRPTRAILERS" => "Ryhmän otsikot",
        "T_SHOW_COLHEADERS" => "Sarakkeiden yläotsikot",
        "T_SHOW_DETAIL" => "Yksityiskohdat",
        "T_OUTPUT" => "Tulostus: ",
        "T_DEBUG_LEVEL" => "Vianetsinnän taso: ",
        "T_DEBUG_NONE" => "Ei mitään",
        "T_DEBUG_LOW" => "Matala",
        "T_DEBUG_MEDIUM" => "Keskitaso",
        "T_DEBUG_HIGH" => "Korkea",
        "T_ENTER_PROJECT_PASSWORD" => "Anna projektin salasana.",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Kirjaudu",
        "T_DEFAULT_REPORT_DESCRIPTION" =>
                "&nbsp<br>".
                "Kirjoita Raportin valinnat tähän. Käytä valinnalle sopivaa avainta.".
                "Kun olet tyytyväinen, valitse sopiva tulostusmuoto ja klikkaa Suorita.",
        "T_PASSWORD_ERROR" => "Virheellinen salasana. Yritä uudelleen.",
        "T_OK" => "Valmis",
        "T_CLEAR" => "Tyhjennä",
        "T_SELECTALL" => "Valitse kaikki",
        "T_UNABLE_TO_CONTINUE" => "Toiminnon jatkaminen ei onnistu",
        "T_Create A New Project" => "Luo uusi Projekti",
        "T_Configure Project" => "Määrittele Projekti",
        "T_Configure Tutorials" => "Määrittele ja luo Opetusohjelmat",
        "T_PRINTABLE" => "Tulostettava HTML",
        "T_PRINT_XML" => "Tulosta XML muodossa",
        "T_PRINT_HTML" => "Tulosta HTML muodossa",
        "T_PRINT_PDF" => "Tulosta PDF muodossa",
        "T_PRINT_CSV" => "Tulosta CSV muodossa",
        "T_PRINT_JSON" => "Tulosta JSON muodossa",
        "T_PRINT_GRID" => "Tulosta Ruudukko",
        "T_STYLE_FORM" => "Raportin tyyli",
        "T_FORM" => "Lomake",
        "T_TABLE" => "Taulukko",
        "T_REPORT_STYLE" => "Muotoilu: ",
        "T_EDITASSIGNMENT" => "Määritykset",
        "T_EDITGROUPS" => "Ryhmät",
        "T_EDITGRAPHS" => "Grafiikka",
        "T_EDITPAGEHEADERS" => "Sivun ylätunniste",
        "T_EDITPAGEFOOTERS" => "Sivun alatunniste",
        "T_EDITGROUPHEADERS" => "Ryhmän ylätunniste",
        "T_EDITGROUPTRAILERS" => "Ryhmän otsikko",
        "T_EDITTITLE" => "Otsikko",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Valinnat",
        "T_EDITCOLUMNS" => "Sarakkeet",
        "T_EDIT" => "Muokkaa",
        "T_EDITPRESQLS" => "Esi-SQL",
        "T_NOTICE" => "Huomio",
        "T_SHOW_CONTENT" => "Näytä sisältö",
        "T_NEW_REPORT" => "Uusi Raportti",
        "T_REPORT_FILE" => "Raporttitiedosto",
        "T_SAVE" => "Tallenna",
        ),
        );
?>
