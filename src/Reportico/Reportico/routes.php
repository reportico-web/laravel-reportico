<?php

Route::get('package2', function() {
    return "Package route test";
});
Route::get('/reportico2', 'HomeController@showMenu');
Route::get('/reportico3', 'Reportico\Reportico\ReporticoController@ajax');
Route::get('/reportico4', 'ReporticoController@ajax');

Route::get('/reportico/mode/execute', 'ModeController@execute');
Route::get('/reportico/mode/prepare', 'ModeController@prepare');
Route::get('/reportico/mode/admin', 'ModeController@admin');
Route::get('/reportico/mode/menu', 'ModeController@menu');

Route::group(Config::get('reportico::routing'), function()
{
    //Route::get('ajax', array('uses' => 'Reportico\Reportico\reportico@create'));
}
);
?>
