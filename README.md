## laravel-reportico


Reportico Module for Laravel 4 and 5.

Reportico for Laravel allows you design reports using the Reportico report designer. These can be run as a report suite and embedded or linked to within your Laravel web site all accessed through a dedicated controller.

As well as the standard Reportico features the module offers the following :-

Embed Reports into your web pages. Embed a complete report suite with menu, individual reports with criteria selection or individual report output
Ability to report based on logged in user using the {FRAMEWORK_USER} parameter
Ability to create report projects against the default laravel connection or against other databases defined in app/config/database.php
Use Reportico's default styling, or let it adapt to your site's bootstrap look and feel
Here you can find out how to install and get started with the module as well as examples of running Reportico within your site application.

## Installation


Install with composer 

For Laravel 5
-------------

composer require "reportico/laravel-reportico"  "~5.2" 

then add to your app.php in the providers section :--

Reportico\Reportico\ReporticoServiceProvider::class 

then publish the config and the assets with:-

php artisan vendor:publish



and then point your browser at

http://laravel_url/public/index.php/reportico



Then you can use the http://laravel_url/public/index.php/reportico to set an admin password, configure the tutorials or create new report project.


For Laravel 4
-------------

composer require "reportico/laravel-reportico"  "4.3" 

then add to your app.php in the providers section :--

'Reportico\Reportico\ReporticoServiceProvider',

then publish the assets with

php artisan asset:publish

and point your browser at

http://laravel_url/public/index.php/reportico



Use the tutorials to get to grips with report design, but for how to embed and create links to reportico from your Laravel app follow the instructions in the link below :-

## Tutorial and Documentation
============================

To get going with the module go to :-

http://www.reportico.org/laravel/public/index.php



## Screenshots


![Criteria Page](/images/reportico_prepare.png?raw=true "Criteria Page")


![Edit Query Page](/images/reportico_sql.png?raw=true "Edit Query Page")


![Report Output Page](/images/reportico_output.png?raw=true "Report Output Page")
