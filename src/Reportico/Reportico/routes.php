<?php
Route::get('/reportico/mode/execute', 'ModeController@execute');
Route::get('/reportico/mode/prepare', 'ModeController@prepare');
Route::get('/reportico/mode/admin', 'ModeController@admin');
Route::get('/reportico/mode/menu', 'ModeController@menu');
Route::get('/reportico', 'ReporticoController@reportico');
Route::get('/reportico/graph', 'ReporticoController@graph');
Route::get('/reportico/dbimage', 'ReporticoController@dbimage');
Route::get('/reportico/ajax', 'ReporticoController@ajax');
?>
