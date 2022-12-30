<?php
namespace Reportico\Engine;

// -----------------------------------------------------------------------------
// -- Reportico -----------------------------------------------------------------
// -----------------------------------------------------------------------------
// Module : config.php
//
// General User Configuration Settings for Reportico Operation
// -----------------------------------------------------------------------------

//setlocale(LC_MONETARY = 'en_US');
//echo money_format('%i'] = $number) . '\n';

//setlocale(LC_MONETARY = 'en_US';
//echo money_format('$%.2n'] = $number) . '\n';
//echo money_format('$%(#10n'] = $number) . '\n';

// Locale settings
ReporticoApp::setConfig('currency','$');
ReporticoApp::setConfig('number_delimiter',',');
ReporticoApp::setConfig('decimal_point','.');
ReporticoApp::setConfig('column_format',array ('number', 'money'));

// Password required to gain access to the project
// Blank of false implies no passwrd required
ReporticoApp::setConfig('project_password',"");

// Project Title used at the top of menus
ReporticoApp::setConfig('project_title',"Northwind Tutorials System");

// Identify whether to always run in into Debug Mode
ReporticoApp::setConfig('allow_output', true);
ReporticoApp::setConfig('allow_debug', true);

// Identify whether Show Criteria is default option
ReporticoApp::setConfig('default_showcriteria', false);


// Specification of Safe Mode. Turn on SAFE mode by specifying true.
// In SAFE mode = design of reports is allowed but Code and SQL Injection
// are prevented. This means that the designer prevents entry of potentially
// dangerous custom PHP source in the Custom Source Section or potentially
// dangerous SQL statements in Pre-Execute Criteria sections
ReporticoApp::setConfig('safe_design_mode',true);

// If false prevents any designing of reports
ReporticoApp::setConfig('allow_maintain',true);

// Identify whether to use AJAX handling. Enabling with enable Data Pickers,
// loading of partial form elements and quicker-ti-use design mode
define('ajax_enabled',true);

// Location of Reportico Top Level Directory From Browser Point of View
// DB connection details for ADODB
ReporticoApp::setConfig('db_type',"pdo_mysql");
// If connecting to existing framework db then use
// db parameters from external framework
if ( ReporticoApp::getConfig('db_type') == 'framework' )
{
ReporticoApp::setConfig('db_driver',ReporticoApp::getConfig('db_driver'));
ReporticoApp::setConfig('db_user',"root");
ReporticoApp::setConfig('db_password',"root");
ReporticoApp::setConfig('db_host',"localhost");
ReporticoApp::setConfig('db_database',"iconnex");
}
else
{
ReporticoApp::setConfig('db_driver',ReporticoApp::getConfig('db_type'));
ReporticoApp::setConfig('db_user',"root");
ReporticoApp::setConfig('db_password',"root");
ReporticoApp::setConfig('db_host',"localhost");
ReporticoApp::setConfig('db_database',"iconnex");
}
ReporticoApp::setConfig('db_connect_from_config',true);
ReporticoApp::setConfig('db_dateformat',"Y-m-d");
ReporticoApp::setConfig('prep_dateformat',"Y-m-d");
ReporticoApp::setConfig('db_server',"");
ReporticoApp::setConfig('db_protocol',"");
ReporticoApp::setConfig('db_encoding',"None");

//HTML Output Encoding
ReporticoApp::setConfig('output_encoding',"UTF8");

// Identify temp area
ReporticoApp::setConfig('tmp_dir','tmp');

// SOAP Environment
ReporticoApp::setConfig('SOAP_NAMESPACE','reportico.org');
ReporticoApp::setConfig('SOAP_SERVICEBASEURL','http://www.reportico.co.uk/swsite/site/tutorials');

// Parameter Defaults
ReporticoApp::setConfig('pdf_PageSize','A4');
ReporticoApp::setConfig('pdf_PageOrientation','Portrait');
ReporticoApp::setConfig('pdf_TopMargin','2cm');
ReporticoApp::setConfig('pdf_BottomMargin','2cm');
ReporticoApp::setConfig('pdf_LeftMargin','1cm');
ReporticoApp::setConfig('pdf_RightMargin','1cm');
ReporticoApp::setConfig('pdf_pdfFont','Helvetica');
ReporticoApp::setConfig('pdf_pdfFontSize','10');

// Pagination and Zoom default
ReporticoApp::setConfig('AutoPaginate','None');
if (stripos(PHP_OS, "WIN") !== false) 
	ReporticoApp::setConfig('PdfZoomFactor','0.98');
else
	ReporticoApp::setConfig('PdfZoomFactor','0.74');
ReporticoApp::setConfig('HtmlZoomFactor','1');
ReporticoApp::setConfig('PageTitleDisplay','TopOfFirstPage');

// FPDF parameters
define('FPDF_FONTPATH', 'fpdf/font/');

// Include an image in your PDF output
// This defalt places icon top right of a portrait image and sizes it to 100 pixels wide
//define('PDF_HEADER_IMAGE'] = 'images/myimage.png';
//define('PDF_HEADER_XPOS'] = '470'); 
//define('PDF_HEADER_YPOS'] = '20';
//define('PDF_HEADER_WIDTH'] = '100';

// Default project language
ReporticoApp::setConfig('language',"en_gb");

// Legacy pointed to home folder
ReporticoApp::setConfig('http_basedir',"./");


// Graph Defaults
// Default Charting Engine is JpGraph. A slightly modified version 3.0.7 of jpGraph is supplied
// within Reportico. 
// 
// Reportico also supports pChart but the pChart package is not currently provided
// as part of the Reportico bundle. To use pChart you will need to unpack the pChart
// application into the reportico folder named pChart. pChart 2.1.3
// You can get pChart from http://www.pchart.net/
//
ReporticoApp::setConfig('graph_engine','PCHART' );
if ( !ReporticoApp::getConfig('graph_engine') == 'JPGRAPH' )
{
ReporticoApp::setConfig('DEFAULT_Font','Arial');
//advent_light
//Bedizen
//Mukti_Narrow
//calibri
//Forgotte
//GeosansLight
//MankSans
//pf_arma_five
//Silkscreen
//verdana
ReporticoApp::setConfig('chart_GraphWidth',800);
ReporticoApp::setConfig('chart_GraphHeight',400);
ReporticoApp::setConfig('chart_GraphWidthPDF',500);
ReporticoApp::setConfig('chart_GraphHeightPDF',250);
ReporticoApp::setConfig('chart_GraphColor','white');
ReporticoApp::setConfig('chart_MarginTop','40');
ReporticoApp::setConfig('chart_MarginBottom','90');
ReporticoApp::setConfig('chart_MarginLeft','60');
ReporticoApp::setConfig('chart_MarginRight','50');
ReporticoApp::setConfig('chart_MarginColor','white');
ReporticoApp::setConfig('chart_XTickLabelInterval','1');
ReporticoApp::setConfig('chart_YTickLabelInterval','2');
ReporticoApp::setConfig('chart_XTickInterval','1');
ReporticoApp::setConfig('chart_YTickInterval','1');
ReporticoApp::setConfig('chart_GridPosition','back');
ReporticoApp::setConfig('chart_XGridDisplay','none');
ReporticoApp::setConfig('chart_XGridColor','gray');
ReporticoApp::setConfig('chart_YGridDisplay','none');
ReporticoApp::setConfig('chart_YGridColor','gray');
ReporticoApp::setConfig('chart_TitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_TitleFontStyle','Normal');
ReporticoApp::setConfig('chart_TitleFontSize','12');
ReporticoApp::setConfig('chart_TitleColor','black');
ReporticoApp::setConfig('chart_XTitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_XTitleFontStyle','Normal');
ReporticoApp::setConfig('chart_XTitleFontSize','10');
ReporticoApp::setConfig('chart_XTitleColor','black');
ReporticoApp::setConfig('chart_YTitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_YTitleFontStyle','Normal');
ReporticoApp::setConfig('chart_YTitleFontSize','10');
ReporticoApp::setConfig('chart_YTitleColor','black');
ReporticoApp::setConfig('chart_XAxisFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_XAxisFontStyle','Normal');
ReporticoApp::setConfig('chart_XAxisFontSize','10');
ReporticoApp::setConfig('chart_XAxisFontColor','black');
ReporticoApp::setConfig('chart_XAxisColor','black');
ReporticoApp::setConfig('chart_YAxisFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_YAxisFontStyle','Normal');
ReporticoApp::setConfig('chart_YAxisFontSize','8');
ReporticoApp::setConfig('chart_YAxisFontColor','black');
ReporticoApp::setConfig('chart_YAxisColor','black');
}
else // Use jpgraph
{
ReporticoApp::setConfig('chart_Font','Mukti_Narrow.ttf');
//advent_light.ttf
//Bedizen.ttf
//calibri.ttf
//Forgotte.ttf
//GeosansLight.ttf
//MankSans.ttf
//pf_arma_five.ttf
//Silkscreen.ttf
//verdana.ttf
ReporticoApp::setConfig('chart_FontSize','8');
ReporticoApp::setConfig('chart_FontColor','#303030');
ReporticoApp::setConfig('chart_LineColor','#303030');
ReporticoApp::setConfig('chart_BackColor','#eeeeff');
ReporticoApp::setConfig('chart_FontStyle','Normal');
ReporticoApp::setConfig('chart_GraphWidth',800);
ReporticoApp::setConfig('chart_GraphHeight',400);
ReporticoApp::setConfig('chart_GraphWidthPDF',500);
ReporticoApp::setConfig('chart_GraphHeightPDF',300);
ReporticoApp::setConfig('chart_GraphColor',ReporticoApp::getConfig('chart_BackColor'));
ReporticoApp::setConfig('chart_MarginTop','50');
ReporticoApp::setConfig('chart_MarginBottom','80');
ReporticoApp::setConfig('chart_MarginLeft','70');
ReporticoApp::setConfig('chart_MarginRight','40');
ReporticoApp::setConfig('chart_MarginColor',ReporticoApp::getConfig('chart_BackColor'));
ReporticoApp::setConfig('chart_XTickLabelInterval','AUTO');
ReporticoApp::setConfig('chart_YTickLabelInterval','2');
ReporticoApp::setConfig('chart_XTickInterval','1');
ReporticoApp::setConfig('chart_YTickInterval','1');
ReporticoApp::setConfig('chart_GridPosition','back');
ReporticoApp::setConfig('chart_XGridDisplay','none');
ReporticoApp::setConfig('chart_XGridColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_YGridDisplay','none');
ReporticoApp::setConfig('chart_YGridColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_TitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_TitleFontStyle',ReporticoApp::getConfig('chart_FontStyle'));
ReporticoApp::setConfig('chart_TitleFontSize',12); 
ReporticoApp::setConfig('chart_TitleColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_XTitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_XTitleFontStyle',ReporticoApp::getConfig('chart_FontStyle'));
ReporticoApp::setConfig('chart_XTitleFontSize',ReporticoApp::getConfig('chart_FontSize'));
ReporticoApp::setConfig('chart_XTitleColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_YTitleFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_YTitleFontStyle',ReporticoApp::getConfig('chart_FontStyle'));
ReporticoApp::setConfig('chart_YTitleFontSize',ReporticoApp::getConfig('chart_FontSize'));
ReporticoApp::setConfig('chart_YTitleColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_XAxisFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_XAxisFontStyle',ReporticoApp::getConfig('chart_FontStyle'));
ReporticoApp::setConfig('chart_XAxisFontSize',ReporticoApp::getConfig('chart_FontSize'));
ReporticoApp::setConfig('chart_XAxisFontColor',ReporticoApp::getConfig('chart_FontColor'));
ReporticoApp::setConfig('chart_XAxisColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_YAxisFont',ReporticoApp::getConfig('chart_Font'));
ReporticoApp::setConfig('chart_YAxisFontStyle',ReporticoApp::getConfig('chart_FontStyle'));
ReporticoApp::setConfig('chart_YAxisFontSize',ReporticoApp::getConfig('chart_FontSize'));
ReporticoApp::setConfig('chart_YAxisFontColor',ReporticoApp::getConfig('chart_LineColor'));
ReporticoApp::setConfig('chart_YAxisColor',ReporticoApp::getConfig('chart_LineColor'));
}


// Static Menu Title default to project Title
ReporticoApp::set('menu_title',ReporticoApp::getConfig('project_title'));

// Vertical centre page main menu, default show all reports in project
ReporticoApp::set('static_menu', array (
        array ( 'language' => 'en_gb', 'report' => '.*\.xml', 'title' => '<AUTO>' )
        ));

// Vertical centre page main menu in admin mode default to all reports
ReporticoApp::set('admin_menu', array (
        array ( 'language' => 'en_gb', 'report' => '.*\.xml', 'title' => '<AUTO>' )
        ));

// Dropdown project menu, default to none
ReporticoApp::set('dropdown_menu', false );

// Default Report Page Sections

ReporticoApp::setConfig('output_sections', array (

        'page-header-block' => array (
                array ( 
                        'content' => '{REPORT_TITLE}', 
                        'styles' => 'border-width: 0px 0px 1px 0px; margin: 25px 0px 0px 0px; border-color: #000000; font-size: 18; border-style: solid;padding:0px 0px 0px 0px; width: 100%; background-color: inherit; color: #000; margin-left: 0%;margin-bottom: 20px;text-align:center' 
                      ),
                array ( 
                        'content' => '', 
                        'styles' => 'width: 100; height: 50; margin: 5px 0 0 0; background-image:vendor/reportico/images/reportico100.png' 
                      ),
                ),

        'page-footer-block' => array (
                array ( 
                        'content' => 'Page: {PAGE} of {PAGETOTAL}', 
                        'styles' => 'border-width: 1 0 0 0; top: 0px; font-size: 8pt; margin: 2px 0px 0px 0px; font-style: italic; margin-top: 30px;' 
                      ),
                array ( 
                        'content' => 'Time: date(\'Y-m-d H:i:s\')', 
                        'styles' => 'font-size: 8pt; text-align: right; font-style: italic; width: 100%; margin-top: 30px;' 
                      ),
                ),

        'page-title-block' => array (
                array ( 
                        'content' => '{REPORT_TITLE}', 
                        'styles' => 'border-width: 1 0 0 0; top: 0px; font-size: 8pt; margin: 2px 0px 0px 0px; font-style: italic;' ,
                        'template' => '<h1>' 
                      ),
                array ( 
                        'content' => 'Time: date(\'Y-m-d H:i:s\')', 
                        'styles' => 'STYLE font-size: 8pt; text-align: right; font-style: italic;text-align:right;' 
                      ),
                ),

        ));

ReporticoApp::setConfig('output_sections_tcpdf', array (

        'page-header-block' => array (
                array ( 
                        'content' => '{REPORT_TITLE}', 
                        'styles' => 'border-width: 0px 0px 1px 0px; margin: 50px 0px 0px 0px; border-color: #000000; font-size: 18; border-style: solid;padding:0px 0px 0px 0px; back1ground-color: #f00; color: #000; margin-left: 0%;margin-bottom: 0px;text-align:center' 
                      ),
                array ( 
                        'content' => '', 
                        'styles' => 'width: 100px; height: 50px; margin: 8px 0px 0px 0px; background-image:'.__DIR__.'/../../../../public/vendor/reportico/images/reportico100.png' 
                      ),
                ),

        'page-footer-block' => array (
                array ( 
                        'content' => 'Page: {PAGE}', 
                        'styles' => 'border-width: 1 0 0 0; margin: 40 0 0 0; font-style: italic' 
                      ),
                array ( 
                        'content' => 'Time: date(\'Y-m-d H:i:s\')', 
                        'styles' => 'font-size: 8pt; text-align: right; font-style: italic; margin-top: 30px;' 
                      ),
                ),

        'page-title-block' => array (
                array ( 
                        'content' => '{REPORT_TITLE}', 
                        'styles' => 'border-width: 1 0 0 0; top: 0px; font-size: 8pt; margin: 2px 0px 0px 0px; font-style: italic;' ,
                        'template' => '<h1>' 
                      ),
            ),

        'styles' => array ( 

            'body' => array(
                'style' => array(
                    "border-width" => "1px 1px 1px 1px",
                    "border-style" => "none",
                    "border-color" => "#333333",
                    "font-size" => "8pt",
                    "font-family" => "freesans",
                    "padding" => "20px 20px 20px 20px"
                )
             ),

            'criteria' => array(
                'style' => array(
                    "font-size" => "8pt",
                    "background-color" => "#eeeeee",
                    "border-style" => "solid",
                    "border-width" => "1px 1px 1px 1px",
                    "border-color" => "#888888",
                    "margin" => "0px 5px 10px 5px",
                    "padding" => "0px 5px 0px 5px",
                    "display" => "none",
                )
             ),

        )));


ReporticoApp::set('static_menu', array (
	array ( "report" => "<p>Welcome to the Reportico demonstration and tutorials.<br>In the drop down menus above you will find some example reports and tutorials.<br>
<Br>To try these reports and tutorials you will need to create the tutorial database tables <br>which are based upon a sample stock and orders database known as Northwind.<br><br>Click the <i>Generate Tutorial Tables</i> below to create the tables in an already existing database<br> (the tables created all begin with the prefix northwind_ so they wont conflict with any existing tables).<br><br>Once you have created the tables you are ready to<br>run through the exercises which are documented in the <a style=\"text-decoration: underline !important\"  target=\"_blank\" href=\"http://www.reportico.org/documentation/4.6/doku.php?id=reporticotutorial\">Reportico online documentation here</a>", "title" => "TEXT" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	array ( "report" => "generate_tutorial.xml", "title" => "Generate The Tutorial Tables" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	));

ReporticoApp::set('admin_menu', array (
	array ( "report" => "<p>Welcome to the Reportico demonstration and tutorials.<br>In the drop down menus above you will find some example reports and tutorials.<br>
<Br>To try these reports and tutorials you will need to create the tutorial database tables <br>which are based upon a sample stock and orders database known as Northwind.<br><br>Click the <i>Generate Tutorial Tables</i> below to create the tables in an already existing database<br> (the tables created all begin with the prefix northwind_ so they wont conflict with any existing tables).<br><br>Once you have created the tables you are ready to<br>run through the exercises which are documented in the <a style=\"text-decoration: underline !important\"  target=\"_blank\" href=\"http://www.reportico.org/documentation/4.6/doku.php?id=reporticotutorial\">Reportico online documentation here</a>", "title" => "TEXT" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	array ( "report" => "generate_tutorial.xml", "title" => "Generate The Tutorial Tables" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	));

ReporticoApp::set('dropdown_menu', array (
                    array ( 
                        "project" => "tutorials",
                        "title" => "Inventory",
                        "items" => array (
                            //array ( "reportfile" => "products.xml" ),
                            array ( "reportfile" => "stock.xml" ),
                            array ( "reportfile" => "suppliers.xml" ),
                            array ( "reportfile" => "customer.xml" ),
                            )
                        ),
                    array ( 
                        "project" => "tutorials",
                        "title" => "Financial",
                        "items" => array (
                            array ( "reportfile" => "orders.xml" ),
                            array ( "reportfile" => "salestotals.xml" ),
                            )
                        ),
                    array ( 
                        "project" => "tutorials",
                        "title" => "Tutorials",
                        "items" => array (
                            array ( "reportfile" => "generate_tutorial.xml") ,
                            array ( "reportfile" => "tut1_1_stock.xml") ,
                            array ( "reportfile" => "tut1_2_stock.xml") ,
                            array ( "reportfile" => "tut1_3_stock.xml") ,
                            array ( "reportfile" => "tut1_4_stock.xml") ,
                            array ( "reportfile" => "tut1_5_stock.xml") ,
                            array ( "reportfile" => "tut2_1_orders.xml") ,
                            array ( "reportfile" => "tut2_2_orders.xml") ,
                            )
                        ),
                ));


?>
