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
    "language" => "Spanish",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "Elegir idioma",
        "T_ADMINTITLE" => "Página de Administración de Reportico",
        "T_LOGGED_IN_AS" => "Conectado como",
        "T_LOGIN" => "Acceder",
        "T_OPEN_LOGIN" => "Acceder al modo de diseño",
        "T_LOGOFF" => "Salir",
        "T_OPEN_LOGOFF" => "Salir del modo diseño",
        "T_ENTER_PROJECT_PASSWORD" => "Introducir la contraseña del proyecto",
        "T_ADMIN_INSTRUCTIONS" =>
                "Selecciona un conjunto de informes desde el siguiente menú desplegable o introduce la contraseña de administrador para empezar a diseñar los informes de Reportico.",
        "T_SET_ADMIN_PASSWORD_INFO" =>
            "Contraseña de administrador no definida.<br> Tienes que establecer una contraseña para empezar a utilizar Reportico y <br>acceder a las funciones administrativas de Reportico<br> Por favor, introduce la contraseña elegida:",
        "T_ADMIN_PASSWORD_NOT_SET" => "Contraseña de administrador no asignada.",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Contraseña de administrador",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Re-escribir<br>Contraseña de administrador",
        "T_SET_ADMIN_PASSWORD" => "Establecer una contraseña:",
        "T_RUN_SUITE" => "Ejecutar proyecto de informe conjunto:",
        "T_CREATE_REPORT" => "Crear un informe de proyecto:",
        "T_CONFIG_PARAM" => "Configurar el Proyecto:",
        "T_DELETE_PROJECT" => "Eliminar Proyecto :",
        "T_DOCUMENTATION" => "Documentación",
        "T_GO" => "Ejecutar",
        "T_UNABLE_TO_CONTINUE" => "Imposible continuar",
        "T_ADMIN_PASSWORD_ERROR" => "Contraseña incorrecta. Inténtalo de nuevo",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Crear un Nuevo Proyecto",
        "T_Configure Tutorials" => "Configurar Tutoriales",
        ),
        );
?>
