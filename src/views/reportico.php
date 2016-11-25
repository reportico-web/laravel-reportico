<?php

$engine= App::make("getReporticoEngine");
$engine->clear_reportico_session=1;
$engine->execute();
?>
