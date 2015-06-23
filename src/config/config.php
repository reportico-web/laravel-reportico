<?php return array(
    'routing' => array(
        'prefix' => 'reportico',
        // 'subdomain' => 'faq.site.com',
    ),

    'framework_type' => 'laravel',

    // Path relative to public where reportico assets are
    'path_to_assets' => 'vendor/reportico',

    // Path relative to laravel pase or fully where projects will be created
    'path_to_projects' => storage_path()."/reportico/projects",

    // Path relative to laravel pase or fully where admin project will be stored
    'path_to_admin' => 'projects',

    // Bootstrap Features
    // Set bootstrap_styles to false for reportico classic styles, or "3" for bootstrap 3 look and feel and 2 for bootstrap 2
    // If you are embedding reportico and you have already loaded bootstrap then set bootstrap_preloaded equals true so reportico
    // doestnt load it again.
    'bootstrap_styles' => "3",
    'bootstrap_preloaded' => false,

    // In bootstrap enable pages, the bootstrap modal is by default used for the quick edit buttons
    // but they can be ignored and reportico's own modal invoked by setting this to true
    'force_reportico_maintain_modals' => false,

    // Indicates whether report output should include a refresh button
    'show_refresh_button' => false,

    // Jquery already included?
    'jquery_preloaded' => false,

    'bootstrap_styles' => "3",
    'bootstrap_preloaded' => false,

    // Engine to use for charts .. 
    // HTML reports can use javascript charting, PDF reports must use PCHART
    'charting_engine' => "PCHART",
    'charting_engine_html' => "NVD3",

    // Engine to use for pdf .. 
    // fpdf is faster but tcpdf offers borders, backgorunds, images, headers footers etc
    'pdf_engine' => "tcpdf",

    // Whether to turn on dynamic grids to provide searchable/sortable reports
    'dynamic_grids' => false,
    'dynamic_grids_sortable' => true,
    'dynamic_grids_searchable' => true,
    'dynamic_grids_paging' => false,
    'dynamic_grids_page_size' => 10,

    // Show or hide various report elements ( Use show or hide )
    'show_hide_navigation_menu' => "show",
    'show_hide_dropdown_menu' => "show",
    'show_hide_report_output_title' => "show",
    'show_hide_prepare_section_boxes' => "show",
    'show_hide_prepare_pdf_button' => "show",
    'show_hide_prepare_html_button' => "show",
    'show_hide_prepare_print_html_button' => "show",
    'show_hide_prepare_csv_button' => "show",
    'show_hide_prepare_page_style' => "show",

    // Static Menu definition
    // ======================
    // identifies the items that will show in the middle of the project menu page.
    // If not set will use the project level menu definitions in project/projectname/menu.php
    // To have no static menu ( for example if you just want to use a drop down then set to empty array )
    // To define a static menu, follow the example here.
    // report can be a valid report file ( without the xml suffix ).
    // If title is left as AUTO then the title will be taken form the report definition
    // Use title of BLANKLINE to separate items and LINE to draw a horizontal line separator
    // Exmaple
    // 'static_menu' => array (
        //array ( "report" => "an_xml_reportfile1", "title" => "<AUTO>" ),
        //array ( "report" => "another_reportfile", "title" => "<AUTO>" ),
        //array ( "report" => "", "title" => "BLANKLINE" ),
        //array ( "report" => "anotherfreportfile", "title" => "Custom Title" ),
        //array ( "report" => "", "title" => "BLANKLINE" ),
        //array ( "report" => "andanother", "title" => "Another Custom Title" ),
    //),
    //
    // To auto generate a static menu from all the xml report files in the project use
    //'static_menu' => array ( array ( "report" => ".*\.xml", "title" => "<AUTO>" ) ),
    //
    // To hide the static report menu
    //'static_menu' => array (),
    'static_menu' => false,

    // Dropdown Menu definition
    // ========================
    // Menu items for the drop down menu
    // Enter definition for the the dropdown menu options across the top of the page
    // Each array element represents a dropdown menu across the page and sub array items for each drop down
    // You must specifiy a project folder for each project entry and the reportfile definitions must point to a valid xml report file
    // within the specified project
    // Example :-
    // 'dropdown_menu' => array(
    //                array ( 
    //                    "project" => "projectname",
    //                    "title" => "dropdown menu 1 title",
    //                    "items" => array (
    //                        array ( "reportfile" => "report" ),
    //                        array ( "reportfile" => "anotherreport" ),
    //                        )
    //                    ),
    //                array ( 
    //                    "project" => "projectname",
    //                    "title" => "dropdown menu 2 title",
    //                    "items" => array (
    //                        array ( "reportfile" => "report" ),
    //                        array ( "reportfile" => "anotherreport" ),
    //                        )
    //                    ),
    //            ),
    'dropdown_menu' => false,
);
