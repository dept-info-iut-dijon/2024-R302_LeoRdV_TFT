<?php

require_once "Helpers\Psr4AutoLoaderClass.php";

use League\Plates\Engine;
use Controllers\MainController;

$loader = new Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\League\Plates', '/Vendor/plates/src');
$loader->addNamespace('\Controllers', '/Controllers');


$controller = new MainController(new Engine(__DIR__."/Views"));
$controller->index();



