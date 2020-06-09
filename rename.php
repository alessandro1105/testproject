<?php

$original = 'module-name.php';
$new = basename(__DIR__) . '.php';

rename(__DIR__ . '/' . $original, __DIR__ . '/' . $new);