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
    "language" => "Português Brasileiro",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "Escolher Idioma",
        "T_ADMINTITLE" => "Reportico - Administracao",
        "T_LOGGED_IN_AS" => "Logado como",
        "T_LOGIN" => "Login",
        "T_LOGOFF" => "Logoff",
        "T_ENTER_PROJECT_PASSWORD" => "Insira a senha do projeto.",
        "T_ADMIN_INSTRUCTIONS" =>
                "Selecione um conjunto de relatório na lista suspensa abaixo ou digite a senha do administrador Reportico para começar a usar Reportico e acessar funções administrativas e criar relatórios.",
        "T_SET_ADMIN_PASSWORD_INFO" =>
            "Senha do administrador não definido atualmente <br> Você precisa definir uma senha para começar a usar Reportico e <br> acesso funções administrativas do Reportico <br> Digite sua senha escolhida.:",
        "T_ADMIN_PASSWORD_NOT_SET" => "Senha do administrador ainda não definida",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "Senha administrativa",
        "T_SET_ADMIN_PASSWORD_REENTER" => "Redigite <br> senha administrativa",
        "T_SET_ADMIN_PASSWORD" => "Definir senha de administrador",
        "T_RUN_SUITE" => "Executar suíte de relatórios do projeto: ",
        "T_CREATE_REPORT" => "Criar relatório no projeto: ",
        "T_CONFIG_PARAM" => "Parametrizar o projecto: ",
        "T_DELETE_PROJECT" => "Apagar projeto: ",
        "T_DOCUMENTATION" => "Documentacao",
        "T_GO" => "Ir",
        "T_UNABLE_TO_CONTINUE" => "Impossível continuar",
        "T_ADMIN_PASSWORD_ERROR" => "Senha incorreta. Tente novamente.",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "LINE",
        "T_Create A New Project" => "Criar novo projeto",
        "T_Configure Tutorials" => "Configurar tutoriais",
        "T_OPEN_LOGIN" => "Entre no modo Design",
        "T_OPEN_LOGOFF" => "Sair do modo de design",
        ),
        );
?>
