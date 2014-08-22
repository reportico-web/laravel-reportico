<?php namespace Reportico\Reportico;

$g_translations = array ();


$g_report_desc = array ( 
    "en_gb" => array (
		"configureproject" =>
"
Configures a project reporting suite.
<P>
To create a new project supply the supply the required parameters and press the <b>Execute</b> button. 
<P>

<b>Project Name</b><br>
The name of the project. A folder with this name will be created under the <b>projects</b> folder within the Reportico Installation Directory 
<p> 

<b>Project Title</b><br>
A title which will appear at the top of the report suite menu .. i.e. a human-understandable name for the project
<p> 

<b>Database Type</b><br>
The type of database you wish to report against. To report against the tables within your Laravel site and using your default laravel database connection, set this to \"use Laravel Connection\". Choose one of the other Laravel databases as defined in the Laravel app/config/database.php file to work a different database connection.
<P> 

<b>Database Character Encoding</b><br>
The encoding format used to store characters in your database. UTF8 will work for Engligh speaking regions and most other cases.
<P>
<b>Output Character Encoding</b><br>
Default is UTF8. When outputting data, output will be converted to this format before rendering the browser, PDF viewer etc.
<P>
<b>Project Password</b><br>
Choose a password which must users must enter to access the project reports. Leave this blank to allow access to project without a password.
<P> 
<b>Display Date Format</b><br>
Choose the date format that you would like to use for displaying and entering dates<P>  
<b>Database Date Format</b><br>
Choose the date format that you use to store dates in your database. MySQL uses YYYYY-MM-DD<P>  
<b>Safe Design Mode</b><br>
When turned on, design mode will prevent entry of custom user code, assignments, and SQL statements (avoiding unwanted entry of dangerous PHP commands and SQL injection ). 
Turn this off to enable access to these functions. Not available during project creation<P>  
</div>"),
		);

$g_report_desc["en_gb"]["createproject"] = $g_report_desc["en_gb"]["configureproject"];
?>
