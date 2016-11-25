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
   "language" => "Spanish",
   "template" => array (
        "T_PROJECT_MENU" => "Proyecto de Menú",
        "T_ADMIN_MENU" => "Menú Administración",
        "T_DESIGN_REPORT" => "Diseño de informes",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Iniciar sesión",
        "T_LOGOFF" => "Salir",
        "T_GO" => "Ejecutar",
        "T_RESET" => "Reinicializar",
        "T_SEARCH" => "Buscar",
        "T_SHOW" => "Mostrar",
        "T_SHOW_CRITERIA" => "Mostrar los criterios",
        "T_SHOW_GRAPH" => "Mostrar el gráfico",
        "T_SHOW_GRPHEADERS" => "Grupo Encabezados",
        "T_SHOW_GRPTRAILERS" => "Grupo Trailers",
        "T_SHOW_COLHEADERS" => "Encabezados de Columna",
        "T_SHOW_DETAIL" => "Detalles",
        "T_OUTPUT" => "Salida:",
        "T_DEBUG_LEVEL" => "Depuración de nivel:",
        "T_DEBUG_NONE" => "Ninguno",
        "T_DEBUG_LOW" => "Bajo",
        "T_DEBUG_MEDIUM" => "Medio",
        "T_DEBUG_HIGH" => "Alto",
        "T_ENTER_PROJECT_PASSWORD" => "",
        "T_DEFAULT_REPORT_DESCRIPTION" =>
                "&nbsp<br>".
                "Introduzca los criterios del informe aquí. Para introducir los criterios de uso de la correspondiente clave de expansión.".
                "Cuando estés satisfecho selecciona el formato de salida correspondiente y haga clic en Aceptar.",
        "T_PASSWORD_ERROR" => "Contraseña incorrecta. Inténtelo de nuevo.",
        "T_OK" => "Aceptar",
        "T_CLEAR" => "Limpiar",
        "T_SELECTALL" => "Seleccionar Todo",
        "T_UNABLE_TO_CONTINUE" => "Imposible continuar",
        "T_Create A New Project" => "Crear un Nuevo Proyecto",
        "T_Configure Project" => "Configurar Proyecto",
        "T_Configure Tutorials" => "Configurar Tutoriales",
        "T_PRINTABLE" => "Generar informe HTML en una nueva ventana",
        "T_PRINT_XML" => "Generar XML de salida",
        "T_PRINT_HTML" => "Generar informe HTML",
        "T_PRINT_PDF" => "Generar informe PDF",
        "T_PRINT_CSV" => "Generar informe CSV",
        "T_PRINT_JSON" => "Generar informe JSON",
        "T_PRINT_GRID" => "Generar cuadrícula del informe",
        "T_STYLE_FORM" => "Estilo de Formulario",
        "T_FORM" => "Forma",
        "T_TABLE" => "Tabla",
        "T_REPORT_STYLE" => "Estilo",
        "T_EDITASSIGNMENT" => "Asignaciones",
        "T_EDITGROUPS" => "Grupos",
        "T_EDITGRAPHS" => "Gráficos",
        "T_EDITPAGEHEADERS" => "Página encabezados",
        "T_EDITPAGEFOOTERS" => "Pies de página",
        "T_EDITGROUPHEADERS" => "Grupo encabezados",
        "T_EDITGROUPTRAILERS" => "Grupo Trailers",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_EDITTITLE" => "Título",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Criterios",
        "T_EDITCOLUMNS" => "Columnas",
        "T_EDIT" => "Editar",
        "T_NOTICE" => "Notificación",
        "T_SAVE" => "Guardar",
        "T_REPORT_FILE" => "Informe del archivo",
        "T_NEW_REPORT" => "Nuevo informe",
        "T_SHOW_CONTENT" => "Mostrar contenido",
        ),
        );
?>
