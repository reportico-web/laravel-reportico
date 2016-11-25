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
        "T_CHOOSE_LANGUAGE" => "Scegli la lingua",
        "T_ADMINTITLE" => "Reportico pagina Amministrazione",
        "T_LOGGED_IN_AS" => "Collegato come",
        "T_LOGIN" => "Login",
        "T_LOGOFF" => "Log Off",
        "T_ENTER_PROJECT_PASSWORD" => "Immettere la password del progetto.",
        "T_ADMIN_INSTRUCTIONS" => "Seleziona una suite relazione della discesa al di sotto o immettere la password di amministratore Reportico per iniziare a utilizzare Reportico e accedere a funzioni amministrative e la capacità di progettare report.",
        "T_SET_ADMIN_PASSWORD_INFO" => "Password di amministratore non è attualmente impostato <br> È necessario impostare una password per iniziare a utilizzare Reportico e le funzioni amministrative <br> Reportico accesso <br> Inserisci il tuo password scelta.:",
        "T_ADMIN_PASSWORD_NOT_SET" => "Password di amministratore non è attualmente impostato.",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Password di amministrazione",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Reinserire <br> password di amministrazione",
        "T_SET_ADMIN_PASSWORD" => "Imposta password Admin",
        "T_RUN_SUITE" => "Esegui report Suite Project:",
        "T_CREATE_REPORT" => "Crea rapporto in Project:",
        "T_CONFIG_PARAM" => "Configurare i parametri per progetto:",
        "T_DELETE_PROJECT" => "Elimina progetto:",
        "T_DOCUMENTATION" => "Documentazione",
        "T_GO" => "Andare",
        "T_UNABLE_TO_CONTINUE" => "Impossibile continuare",
        "T_ADMIN_PASSWORD_ERROR" => "Password errata. Prova di nuovo.",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Creare un nuovo progetto",
        "T_Configure Tutorials" => "Configurare Tutorials",
        "T_OPEN_LOGIN" => "Entrare in modalità progettazione",
        "T_OPEN_LOGOFF" => "Esci da modalità Progettazione",
        ),
        );
?>
