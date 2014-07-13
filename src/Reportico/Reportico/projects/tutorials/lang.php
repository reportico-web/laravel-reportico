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

 * File:        lang.php
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
$g_translations = array (
		"en_gb" => array (
            ),
		"fr_fr" => array (
		   "Criteria" => "Critère",
			"Film" => "Filme",
			"Country" => "Pays",
			"Film Category" => "Categorie Du Film",
			"Film List (Tutorial 1 Stage 5)" => "La Liste Du Filme ( 1/5 ) ",
			"Loan History" => "La Historie Des Emplacements",
			"DVD Store Reporting System" => "La Systeme Du DVD",
			"All" => "Toute",
			"January" => "Janvier",
			"February" => "Fevrier",
			"Loaned Out" => "D'emplacee",
			"Debug" => "Debouge",
			"Unable To Continue:" => "Pas Possible De Continuer:",
			"Go Back" => "Retourner",
			"No Data was Found Matching Your Criteria" => "Rien D'Data",
			"Warning" => "Premonant",
			"Loaned" => "Emplacee",
			"Full Name" => "Nom en Plein",
			"Loan Count" => "Conte Empla",
			"Report Output" => "Conte Empla"
			)
		);

$g_report_desc = array ( "fr_fr" => array (
		"tut2_loanhistory.xml" =>
'
La <b>Report Du Emplacement Histoire</b> produit une liste des filmes bourree du libraire groupee par membre.
<p>
Il montre le suivant :-
<p>
1. 
 of adding a date range criteria by reporting on films that have been borrowed between the specified dates. It also demonstrates the use of setting date range defaults.
<p>
2. use of a LIST type criteria item
<p>
3. conditional assignment by displaying "UNRETURNED" in the return date column instead of a normal blank
'
			)
		);
?>
