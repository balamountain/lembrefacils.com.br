<?php

$app_path = realpath(dirname(__FILE__) . '/../application');
include $app_path.'/bootstrap.php';

// Pega a variável de ambiente com a configuração desejada
$bootstrap = new Bootstrap();
$bootstrap->run();