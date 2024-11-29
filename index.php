<?php

require_once "Helpers\Psr4AutoLoaderClass.php";

use League\Plates\Engine;
use Controllers\MainController;
use Config\Config;
$loader = new Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers', __DIR__.'/Helpers');
$loader->addNamespace('\League\Plates', __DIR__.'/Vendor/plates/src');
$loader->addNamespace('\Controllers', __DIR__.'/Controllers');
$loader->addNamespace('\Config', __DIR__.'/Config');
$loader->addNamespace('\Models', __DIR__.'/Models');



$controller = new MainController(new Engine(__DIR__."/Views"));
$controller->index();
//var_dump($loader);


