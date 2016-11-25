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
    "language" => "English",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "Elegir el idioma",
        "T_GO" => "Ejecutar",
        "T_LOGGED_IN_AS" => "Identificado como",
        "T_LOGIN" => "Iniciar sessión",
        "T_LOGOFF" => "Salir",
        "T_ADMIN_HOME" => "Menú de Administración",
        "T_CONFIG_PROJECT" => "Configurar Proyecto",
        "T_CREATE_REPORT" => "Crear Informe",
        "T_ENTER_PROJECT_PASSWORD" => "Introduzca la contraseña del proyecto",
        "T_ENTER_PROJECT_PASSWORD_DEMO" => "Introduzca la contraseña del proyecto.<br>La contraseña de estos tutoriales es <b>reportico</b>",
        "T_UNABLE_TO_CONTINUE" => "Imposible continuar",
        "T_PASSWORD_ERROR" => "Contraseña incorrecta. Inténtelo de nuevo.",
        ),
        );
?>
