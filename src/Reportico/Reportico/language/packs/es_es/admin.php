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
            "T_ADMINTITLE" => "Reportico Página de Administracion",
            "T_LOGGED_IN_AS" => "Iniciado la sesión como",
            "T_LOGIN" => "Acceder",
            "T_LOGOFF" => "Salir",
            "T_ENTER_PROJECT_PASSWORD" => "Introducir la contraseña del proyecto",
            "T_ADMIN_INSTRUCTIONS" => "Seleccione un conjunto de informes desde el siguiente menú desplegable o introduzca la contraseña del administrador para empezar a utilizar Reportico Reportico y acceder a funciones administrativas y de la capacidad para diseñar informes.",
            "T_SET_ADMIN_PASSWORD_INFO" =>
                "Contraseña de administrador no se encuentra establecido <br> Tiene que establecer una contraseña para empezar a utilizar y las funciones administrativas Reportico Reportico acceso <br> de <br> Por favor, introduzca la contraseña elegida.:",
            "T_ADMIN_PASSWORD_NOT_SET" => "Contraseña de administrador no se encuentra activado.",
            "T_SET_ADMIN_PASSWORD_PROMPT" => "Contraseña de administrador",
            "T_SET_ADMIN_PASSWORD_REENTER" => "Vuelve a entrar<br>Contraseña de administrador",
            "T_SET_ADMIN_PASSWORD" => "Establecer una contraseña:",
            "T_RUN_SUITE" => "Ejecutar proyecto de informe conjunto:",
            "T_CREATE_REPORT" => "Crear un informe de proyecto:",
            "T_CONFIG_PARAM" => "Configurar los parámetros para el Proyecto:",
            "T_DELETE_PROJECT" => "Eliminar del Proyecto :",
            "T_DOCUMENTATION" => "Documentación",
            "T_CHOOSE_LANGUAGE" => "Elegir el idioma",
            "T_GO" => "Ejecutar",
            "T_ADMIN_PASSWORD_ERROR" => "Contraseña incorrecta. Inténtelo de nuevo",
            "T_UNABLE_TO_CONTINUE" => "Incapaz de Seguir",
            "T_BLANKLINE" => "BLANKLINE",
            "T_LINE" => "LINE",
            "T_Create A New Project" => "Crear un Nuevo Proyecto",
            "T_Configure Tutorials" => "Configurar Tutoriales",
            ),
        );
?>
