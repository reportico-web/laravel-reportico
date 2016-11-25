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
$menu_title = SW_PROJECT_TITLE;
$menu = array (
	array ( "language" => "en_gb", "report" => ".*\.xml", "title" => "<AUTO>" )
	);
?>
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
$menu_title = SW_PROJECT_TITLE;
$menu = array (
	array ( "report" => "<p>Welcome to the Reportico demonstration and tutorials.<br>In the drop down menus above you will find some example reports and tutorials.<br>
<Br>To try these reports and tutorials you will need to create the tutorial database tables <br>which are based upon a sample stock and orders database known as Northwind.<br><br>Click the <i>Generate Tutorial Tables</i> below to create the tables in an already existing database<br> (the tables created all begin with the prefix northwind_ so they wont conflict with any existing tables).<br><br>Once you have created the tables you are ready to<br>run through the exercises which are documented in the <a style=\"text-decoration: underline !important\"  target=\"_blank\" href=\"http://www.reportico.org/documentation/4.6/doku.php?id=reporticotutorial\">Reportico online documentation here</a>", "title" => "TEXT" ),
	//array ( "report" => "stock.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut2_orders.xml", "title" => "<AUTO>" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	array ( "report" => "generate_tutorial.xml", "title" => "Generate The Tutorial Tables" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	//array ( "report" => "tut1_1_stock.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut1_2_stock.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut1_3_stock.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut1_4_stock.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut2_1_orders.xml", "title" => "<AUTO>" ),
	//array ( "report" => "tut2_2_orders.xml", "title" => "<AUTO>"),
	);

$admin_menu = $menu;


$dropdown_menu = array(
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
                );

?>
