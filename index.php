<?php

require_once "Helpers\Psr4AutoLoaderClass.php";



$loader = new Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\League\Plates', '/Vendor/plates/src');

$engine = new League\Plates\Engine(__DIR__."/Views");
echo $engine->render("home", ['tftSetName' => "truc"]);


