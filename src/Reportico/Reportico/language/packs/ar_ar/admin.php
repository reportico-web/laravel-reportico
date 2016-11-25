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
    "language" => "English",
    "template" => array (
        "T_CHOOSE_LANGUAGE" => "اختيار اللغة",
        "T_ADMINTITLE" => "Reportico الإدارة صفحة",
        "T_LOGGED_IN_AS" => "مسجله في",
        "T_LOGIN" => "تسجيل الدخول",
        "T_LOGOFF" => "تسجيل الخروج",
        "T_ENTER_PROJECT_PASSWORD" => "أدخل كلمة المرور المشروع.",
        "T_ADMIN_INSTRUCTIONS" => "حدد مجموعة تقريرا من دون المنسدلة أو إدخال كلمة مرور المسؤول Reportico للبدء في استخدام Reportico والوصول إلى وظائف إدارية والقدرة على تصميم التقارير.",
        "T_SET_ADMIN_PASSWORD_INFO" => "كلمة مرور المسؤول لم يحدد حاليا <BR> تحتاج إلى تعيين كلمة مرور لبدء استخدام Reportico ووظائف <BR> Reportico الوصول إلى الإدارة <BR> الرجاء إدخال كلمة المرور التي اخترتها.:",
        "T_ADMIN_PASSWORD_NOT_SET" => "كلمة مرور المسؤول لم يحدد حاليا.",
        "T_SET_ADMIN_PASSWORD_PROMPT" => "الإدارية كلمة السر",
        "T_SET_ADMIN_PASSWORD_REENTER" => "أعد إدخال كلمة السر <BR> الإدارية",
        "T_SET_ADMIN_PASSWORD" => "وضع كلمة سر",
        "T_RUN_SUITE" => "تشغيل المشروع جناح التقرير:",
        "T_CREATE_REPORT" => "إنشاء تقرير في المشروع:",
        "T_CONFIG_PARAM" => "تكوين معلمات من أجل المشروع:",
        "T_DELETE_PROJECT" => "حذف المشروع:",
        "T_DOCUMENTATION" => "توثيق",
        "T_GO" => "الذهاب",
        "T_UNABLE_TO_CONTINUE" => "غير قادر على الاستمرار",
        "T_ADMIN_PASSWORD_ERROR" => "غير صحيح كلمة السر. حاول مرة أخرى.",
        "T_BLANKLINE" => "BLANKLINE",
        "T_LINE" => "خط",
        "T_Create A New Project" => "إنشاء مشروع جديد",
        "T_Configure Tutorials" => "تشكيل نمط",
        "T_OPEN_LOGIN" => "أدخل وضع التصميم",
        "T_OPEN_LOGOFF" => "وضع التصميم خروج",
        ),
        );
?>
