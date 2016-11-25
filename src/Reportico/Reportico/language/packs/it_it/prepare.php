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
        "T_PROJECT_MENU" => "Progetto Menu",
        "T_ADMIN_MENU" => "Menu Admin",
        "T_DESIGN_REPORT" => "Report Design",
        "T_EXPAND" => " ",
        "T_LOGIN" => "Login",
        "T_LOGOFF" => "Log Off",
        "T_GO" => "Andare",
        "T_RESET" => "Azzerare",
        "T_SEARCH" => "Cerca",
        "T_SHOW" => "Mostra",
        "T_SHOW_CRITERIA" => "Criteri",
        "T_SHOW_GRAPH" => "Grafico",
        "T_SHOW_GRPHEADERS" => "Gruppo Headers",
        "T_SHOW_GRPTRAILERS" => "Gruppo Rimorchi",
        "T_SHOW_COLHEADERS" => "Intestazioni di colonna",
        "T_SHOW_DETAIL" => "Dettaglio",
        "T_OUTPUT" => "Uscita:",
        "T_DEBUG_LEVEL" => "Livello di debug:",
        "T_DEBUG_NONE" => "Nessuno",
        "T_DEBUG_LOW" => "Basso",
        "T_DEBUG_MEDIUM" => "Medio",
        "T_DEBUG_HIGH" => "Alto",
        "T_ENTER_PROJECT_PASSWORD" => "Immettere la password del progetto.",
        "T_DEFAULT_REPORT_DESCRIPTION" => "<br> Immettere i criteri di segnalazione qui. Per immettere i criteri di usare l'appropriato espandere key.When sei felice selezionare il formato di uscita appropriato e fare clic su OK.",
        "T_PASSWORD_ERROR" => "Password errata. Prova di nuovo.",
        "T_OK" => "Ok",
        "T_CLEAR" => "Cancella",
        "T_SELECTALL" => "Seleziona tutto",
        "T_UNABLE_TO_CONTINUE" => "Impossibile continuare",
        "T_Create A New Project" => "Creare un nuovo progetto",
        "T_Configure Project" => "Configurazione del progetto",
        "T_Configure Tutorials" => "Configurare Tutorials",
        "T_PRINTABLE" => "Stampabile HTML",
        "T_PRINT_XML" => "Generare output XML",
        "T_PRINT_HTML" => "Genera report HTML",
        "T_PRINT_PDF" => "Genera rapporto PDF",
        "T_PRINT_CSV" => "Genera CSV Rapporto",
        "T_PRINT_JSON" => "Genera JSON Segnala",
        "T_STYLE_FORM" => "Modulo di uscita",
        "T_FORM" => "Modulo",
        "T_TABLE" => "Tavolo",
        "T_REPORT_STYLE" => "Stile",
        "T_PRINT_GRID" => "Genera report Griglia",
        "T_EDITASSIGNMENT" => "Assegnazioni",
        "T_EDITGROUPS" => "Gruppi",
        "T_EDITGRAPHS" => "Grafici",
        "T_EDITPAGEHEADERS" => "di intestazioni",
        "T_EDITPAGEFOOTERS" => "piè di pagina",
        "T_EDITGROUPHEADERS" => "intestazioni di gruppo",
        "T_EDITGROUPTRAILERS" => "Trailers Gruppo",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_EDITTITLE" => "titolo",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Criteri",
        "T_EDITCOLUMNS" => "Colonne",
        "T_EDIT" => "Modifica",
        "T_NOTICE" => "Notifica",
        "T_SAVE" => "Salvare",
        "T_REPORT_FILE" => "Segnala un file",
        "T_NEW_REPORT" => "Un nuovo rapporto",
        "T_SHOW_CONTENT" => "Mostra contenuto",
        ),
        );
?>
