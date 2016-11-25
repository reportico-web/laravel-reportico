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
   "language" => "English",
   "template" => array (
        "T_PROJECT_MENU" => "مشروع القائمة",
        "T_ADMIN_MENU" => "مشرف القائمة",
        "T_DESIGN_REPORT" => "تصميم التقرير",
        "T_EXPAND" => " ",
        "T_LOGIN" => "تسجيل الدخول",
        "T_LOGOFF" => "تسجيل الخروج",
        "T_GO" => "الذهاب",
        "T_RESET" => "إعادة",
        "T_SEARCH" => "البحث",
        "T_SHOW" => "إظهار",
        "T_SHOW_CRITERIA" => "المعايير",
        "T_SHOW_GRAPH" => "رسم بياني",
        "T_SHOW_GRPHEADERS" => "مجموعة الرؤوس",
        "T_SHOW_GRPTRAILERS" => "مجموعة المقطورات",
        "T_SHOW_COLHEADERS" => "رؤوس الأعمدة",
        "T_SHOW_DETAIL" => "التفاصيل",
        "T_OUTPUT" => "الإخراج:",
        "T_DEBUG_LEVEL" => "تصحيح المستوى:",
        "T_DEBUG_NONE" => "لا شيء",
        "T_DEBUG_LOW" => "منخفض",
        "T_DEBUG_MEDIUM" => "متوسط",
        "T_DEBUG_HIGH" => "ارتفاع",
        "T_ENTER_PROJECT_PASSWORD" => "أدخل كلمة المرور المشروع.",
        "T_DEFAULT_REPORT_DESCRIPTION" => "<BR> إدخال معايير التقرير الخاص بك هنا. لإدخال معايير استخدام المناسبة توسيع key.When كنت سعيدا تحديد شكل الانتاج المناسبة وانقر فوق موافق.",
        "T_PASSWORD_ERROR" => "غير صحيح كلمة السر. حاول مرة أخرى.",
        "T_OK" => "موافق",
        "T_CLEAR" => "مسح",
        "T_SELECTALL" => "حدد الكل",
        "T_UNABLE_TO_CONTINUE" => "غير قادر على الاستمرار",
        "T_Create A New Project" => "إنشاء مشروع جديد",
        "T_Configure Project" => "تكوين مشروع",
        "T_Configure Tutorials" => "تشكيل نمط",
        "T_PRINTABLE" => "طباعة HTML",
        "T_PRINT_XML" => "توليد الناتج XML",
        "T_PRINT_HTML" => "توليد تقرير HTML",
        "T_PRINT_PDF" => "توليد تقرير PDF",
        "T_PRINT_CSV" => "توليد CSV تقرير",
        "T_PRINT_JSON" => "تولد JSON تقرير",
        "T_STYLE_FORM" => "شكل الناتج",
        "T_FORM" => "شكل",
        "T_TABLE" => "جدول",
        "T_REPORT_STYLE" => "أسلوب",
        "T_PRINT_GRID" => "",
        "T_EDITASSIGNMENT" => "تعيينات",
        "T_EDITGROUPS" => "المجموعات",
        "T_EDITGRAPHS" => "الرسوم البيانية",
        "T_EDITPAGEHEADERS" => "رؤوس الصفحة",
        "T_EDITPAGEFOOTERS" => "الصفحة التذييلات",
        "T_EDITGROUPHEADERS" => "رؤوس المجموعة",
        "T_EDITGROUPTRAILERS" => "مقطورة المجموعة",
        "T_EDITPRESQLS" => "Pre-SQLs",
        "T_EDITTITLE" => "عنوان",
        "T_EDITSQL" => "SQL",
        "T_EDITCRITERIA" => "المعايير",
        "T_EDITCOLUMNS" => "الأعمدة",
        "T_EDIT" => "تحرير",
        "T_NOTICE" => "إعلام",
        "T_SAVE" => "حفظ",
        "T_REPORT_FILE" => "الإبلاغ عن ملف",
        "T_NEW_REPORT" => "تقرير جديد",
        "T_SHOW_CONTENT" => "عرض المحتوى",
        ),
        );
?>
