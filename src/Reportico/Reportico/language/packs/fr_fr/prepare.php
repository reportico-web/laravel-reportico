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
"language" => "French",
"template" => array (
        "T_PROJECT_MENU" => "Menu du projet",
        "T_DESIGN_REPORT" => "Rapport de conception",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Connexion",
        "T_LOGOFF" => "Déconnexion",
        "T_GO" => "Confirmer",
        "T_RESET" => "Réinitialiser",
        "T_SEARCH" => "Rechercher",
        "T_SHOW_CRITERIA" => "Les Critères",
        "T_SHOW_GRAPH" => "Le graphique",
        "T_OUTPUT" => "Sortie:",
        "T_DEBUG_LEVEL" => "Debug Level:",
        "T_DEBUG_NONE" => "Aucun",
        "T_DEBUG_LOW" => "Faible",
        "T_DEBUG_MEDIUM" => "Moyen",
        "T_DEBUG_HIGH" => "Haut",
        "T_ENTER_PROJECT_PASSWORD" => "",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Connexion",
        "T_DEFAULT_REPORT_DESCRIPTION" => "Entrez vos critères de le signaler ici. Pour entrer des critères utiliser le cas échéant d'élargir la clé. Lorsque vous êtes satisfait de sélectionner le format de sortie approprié et cliquez sur OK.",
        "T_PASSWORD_ERROR" => "Mot de passe incorrect. Essayez à nouveau .",
        "T_OK" => "Ok",
        "T_CLEAR" => "Effacer",
        "T_SELECTALL" => "Sélectionner tout",
        "T_UNABLE_TO_CONTINUE" => "Impossible de continuer",
        "T_Create A New Project" => "Créer un Nouveau Projet",
        "T_Configure Project" => "Configurer Projet",
        "T_Configure Tutorials" => "Configurer Tutoriaux",

        "T_ADMIN_MENU" => "Admin Menu",
        "T_LOGIN" => "Log In",
        "T_SHOW" => "Show",
        "T_SHOW_GRPHEADERS" => "Group Headers",
        "T_SHOW_GRPTRAILERS" => "Group Trailers",
        "T_SHOW_COLHEADERS" => "Column Headers",
        "T_SHOW_DETAIL" => "Detail",
        "T_PRINTABLE" => "HTML imprimable",
        "T_PRINT_XML" => "Générer une sortie XML",
        "T_PRINT_HTML" => "Générer un rapport HTML",
        "T_PRINT_PDF" => "Générer un rapport PDF",
        "T_PRINT_CSV" => "Générer CSV rapport",
        "T_PRINT_JSON" => "Générer JSON rapport",
        "T_STYLE_FORM" => "Formulaire de sortie",
        "T_FORM" => "Formulaire",
        "T_TABLE" => "Tableau",
        "T_REPORT_STYLE" => "Style",
        "T_PRINT_GRID" => "Générer un rapport Grille",
        "T_EDITASSIGNMENT" => "Missions",
        "T_EDITGROUPS" => "Groupes",
        "T_EDITGRAPHS" => "Graphiques",
        "T_EDITPAGEHEADERS" => "Têtes de page",
        "T_EDITPAGEFOOTERS" => "Pieds de page",
        "T_EDITGROUPHEADERS" => "Têtes de groupe",
        "T_EDITGROUPTRAILERS" => "Remorques Groupe",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_EDITTITLE" => "Titre",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Critères",
        "T_EDITCOLUMNS" => "Colonnes",
        "T_EDIT" => "Éditer",
        "T_NOTICE" => "Notification",
        "T_SAVE" => "Enregistrer",
        "T_REPORT_FILE" => "Rapport de fichier",
        "T_NEW_REPORT" => "Un nouveau rapport",
        "T_SHOW_CONTENT" => "Montrer le contenu",
),
);
?>
