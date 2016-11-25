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
   "language" => "Português Brasileiro",
   "template" => array (
        "T_PROJECT_MENU" => "Menu do Projeto",
        "T_ADMIN_MENU" => "Menu Principal",
        "T_DESIGN_REPORT" => "Desenhar Relatorio",
        "T_EXPAND" => " ",
        "T_LOGIN" => "Entrar",
        "T_LOGOFF" => "Sair",
        "T_GO" => "Ir",
        "T_RESET" => "Resetar",
        "T_SEARCH" => "Pesquisar",
        "T_SHOW" => "Exibir",
        "T_SHOW_CRITERIA" => "Criterio",
        "T_SHOW_GRAPH" => "Grafico",
        "T_SHOW_GRPHEADERS" => "Grupo Headers",
        "T_SHOW_GRPTRAILERS" => "Grupo Trailers",
        "T_SHOW_COLHEADERS" => "Cabecalho Coluna",
        "T_SHOW_DETAIL" => "Detalhes",
        "T_OUTPUT" => "Exibicao:",
        "T_DEBUG_LEVEL" => "DEBUG:",
        "T_DEBUG_NONE" => "Nenhum",
        "T_DEBUG_LOW" => "Baixo",
        "T_DEBUG_MEDIUM" => "Medio",
        "T_DEBUG_HIGH" => "Alto",
        "T_ENTER_PROJECT_PASSWORD" => "Informe a senha do projeto.",
        "T_EXPAND" => ">>",
        "T_LOGIN" => "Entrar",
        "T_DEFAULT_REPORT_DESCRIPTION" =>
                "&nbsp<br>".
                "Informs os criterios do seu relatorio aqui. Para inserir um criterio use a opcao apropriada para expandir.".
                "Quando concluir, selecione o tipo de exibicao desejado e clique em OK.",
        "T_PASSWORD_ERROR" => "Senha incorreta. Tente novamente.",
        "T_OK" => "Ok",
        "T_CLEAR" => "Limpar",
        "T_SELECTALL" => "Selecionar tudo",
        "T_UNABLE_TO_CONTINUE" => "Nao e possivel continuar",
        "T_Create A New Project" => "Criar novo Projeto",
        "T_Configure Project" => "Configurar Projeto",
        "T_Configure Tutorials" => "Configurar Tutoriais",
        "T_PRINTABLE" => "HTML para impressão",
        "T_PRINT_XML" => "Gerar exibicao em XML",
        "T_PRINT_HTML" => "Gerar Relatorio em HTML",
        "T_PRINT_PDF" => "Gerar relatorio em PDF",
        "T_PRINT_CSV" => "Gerar Relatorio em CSV",
        "T_PRINT_JSON" => "Gerar Relatorio em JSON",
        "T_PRINT_GRID" => "Gerar Relatorio em Grid",
        "T_STYLE_FORM" => "Exibir como Formulario",
        "T_FORM" => "Formulario",
        "T_TABLE" => "Tabela",
        "T_REPORT_STYLE" => "Estilo", 
        "T_REPORT_STYLE" => "Estilo",
        "T_EDITASSIGNMENT" => "Atribuicoes",
        "T_EDITGROUPS" => "Grupos",
        "T_EDITGRAPHS" => "Graficos",
        "T_EDITTITLE" => "Titulo",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "Criterios",
        "T_EDITCOLUMNS" => "Colunas",
        "T_EDIT" => "Editar",
        "T_EDITPAGEHEADERS" => "Cabeçalhos de página",
        "T_EDITPAGEFOOTERS" => "Rodapé",
        "T_EDITGROUPHEADERS" => "Cabeçalhos de grupo",
        "T_EDITGROUPTRAILERS" => "Trailers Grupo",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_OPEN_LOGIN" => "Entrar no modo de design",
        "T_OPEN_LOGOFF" => "Modo Design Retire",
        "T_SELECT2SINGLE" => "Pesquisável Lista Única Box",
        "T_SELECT2MULTIPLE" => "Pesquisável Box Lista Múltipla",
        "T_CRITERIAHIDDEN" => "Esconder Critários",
        "T_CRITERIAREQUIRED" => "Critários exigidos",
        "T_NOTICE" => "Notificação",
        "T_SAVE" => "Salvar",
        "T_REPORT_FILE" => "Arquivo do relatorio",
        "T_NEW_REPORT" => "Novo relatorio",
        "T_SHOW_CONTENT" => "Mostra contenuto",
        ),
        );
?>
