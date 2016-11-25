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
"language" => "French",
"template" => array (
        "T_ADMINTITLE" => "Page d'administration Reportico",
        "T_LOGGED_IN_AS" => "Connecté en tant que",
        "T_LOGIN" => "Connexion",
        "T_LOGOFF" => "Déconnexion",
        "T_ENTER_PROJECT_PASSWORD" => "Entrez le mot de passe projet .",
        "T_ADMIN_INSTRUCTIONS" =>
"Sélectionnez une suite rapport de la ci-dessous la liste déroulante ou entrez le mot de passe administrateur Reportico pour commencer à utiliser Reportico et accéder à des fonctions administratives et la capacité de concevoir des rapports",
        "T_SET_ADMIN_PASSWORD_INFO" =>
"Mot de passe administrateur n'est actuellement pas mis en <br> Vous devez définir un mot de passe pour commencer à utiliser Reportico et fonctions administratives Reportico accès <br> de <br> S'il vous plaît entrer votre mot de passe choisi.:",
        "T_ADMIN_PASSWORD_NOT_SET" => "Mot de passe administrateur n'est pas actuellement fixé .",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Mot de passe administratif",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Entrez à nouveau <br> mot de passe administrateur",
        "T_SET_ADMIN_PASSWORD" => "Définir mot de passe Admin",
        "T_RUN_SUITE" => "Exécuter le rapport du projet Suite:",
        "T_CREATE_REPORT" => "Créer un rapport dans le projet:",
        "T_CONFIG_PARAM" => "Configurer le projet:",
        "T_DELETE_PROJECT" => "Delete Project :",
        "T_DOCUMENTATION" => "Documentation",
        "T_CHOOSE_LANGUAGE" => "Choisir la langue",
        "T_GO" => "Confirmer",
        "T_ADMIN_PASSWORD_ERROR" => "Mot de passe incorrect. Essayez à nouveau .",
        "T_UNABLE_TO_CONTINUE" => "Impossible de continuer",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Créer un Nouveau Projet",
        "T_Configure Tutorials" => "Configurer Tutoriaux",
        "T_OPEN_LOGIN" => "Entrer en mode design",
        "T_OPEN_LOGOFF" => "Mode Design Quitter",
),
);
?>
