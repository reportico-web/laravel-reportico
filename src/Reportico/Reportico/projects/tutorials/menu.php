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
	array ( "report" => "tut1_films.xml", "title" => "<AUTO>" ),
	array ( "report" => "tut2_loanhistory.xml", "title" => "<AUTO>" ),
	array ( "report" => "tut3_monthreturns.xml", "title" => "<AUTO>" ),
	array ( "report" => "tut4_lateness.xml", "title" => "<AUTO>" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	array ( "report" => "generate_tutorial.xml", "title" => "Generate The Tutorial Database" ),
	array ( "report" => "", "title" => "BLANKLINE" ),
	array ( "report" => "tut1_1_films.xml", "title" => "Film Listing - Tutorial1 Stage1" ),
	array ( "report" => "tut1_2_films.xml", "title" => "Film Listing - Tutorial1 Stage2" ),
	array ( "report" => "tut1_3_films.xml", "title" => "Film Listing - Tutorial1 Stage3" ),
	array ( "report" => "tut1_4_films.xml", "title" => "Film Listing - Tutorial1 Stage4" ),
	array ( "report" => "tut1_5_films.xml", "title" => "Film Listing - Tutorial1 Stage5" ),
	array ( "report" => "tut2_1_loanhistory.xml", "title" => "Loan History Report - Begin the Tutorial" ),
	array ( "report" => "tut3_1_monthreturns.xml", "title" => "Monthly Returns Report - Begin the Tutorial"),
	array ( "report" => "tut4_1_lateness.xml", "title" => "Late Returns Summary - Begin the Tutorial" ),
	);

$dropdown_menu = array(
                    array ( 
                        "project" => "tutorials",
                        "title" => "Listings",
                        "items" => array (
                            array ( "reportfile" => "tut1_films.xml" ),
                            array ( "reportfile" => "tut2_loanhistory.xml" )
                            )
                        ),
                    array ( 
                        "project" => "tutorials",
                        "title" => "Analysis Reports",
                        "items" => array (
                            array ( "reportfile" => "tut3_monthreturns.xml") ,
                            array ( "reportfile" => "tut4_lateness.xml")
                            )
                        ),
                    array ( 
                        "project" => "tutorials",
                        "title" => "Tutorials",
                        "items" => array (
                            array ( "reportfile" => "generate_tutorial.xml") ,
                            array ( "reportfile" => "tut1_1_films.xml") ,
                            array ( "reportfile" => "tut1_2_films.xml") ,
                            array ( "reportfile" => "tut1_3_films.xml") ,
                            array ( "reportfile" => "tut1_4_films.xml") ,
                            array ( "reportfile" => "tut1_5_films.xml") ,
                            array ( "reportfile" => "tut2_1_films.xml") ,
                            array ( "reportfile" => "tut3_1_films.xml") ,
                            array ( "reportfile" => "tut4_1_films.xml") 
                            )
                        ),
                );

?>
