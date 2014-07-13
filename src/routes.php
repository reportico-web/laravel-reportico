<?php
$hanndles = Config::get('reportico::handles');

// Make sure a trailing is at the end
$handles = rtrim($handles, '/').'/';

Route::get($handles.'slug', function() {
    return 'Hello';
});
?>
