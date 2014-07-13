<?php
/****************************************************************************** 
 * Software: FPDF                                                             * 
 * @version  1.52                                                             * 
 * @date     2003-12-30                                                       * 
 * @author   Olivier PLATHEY                                                  * 
 * @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL                * 
 ******************************************************************************/
for($i=0;$i<=255;$i++)
	$fpdf_charwidths['courier'][chr($i)]=600;
$fpdf_charwidths['courierB']=$fpdf_charwidths['courier'];
$fpdf_charwidths['courierI']=$fpdf_charwidths['courier'];
$fpdf_charwidths['courierBI']=$fpdf_charwidths['courier'];
?>
