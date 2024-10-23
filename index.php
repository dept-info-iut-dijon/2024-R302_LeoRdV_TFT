<?php

require_once "Helpers\Psr4AutoLoaderClass.php";



$loader = new Helpers\Psr4AutoloaderClass();
$loader->register();
$loader->addNamespace('\Helpers', '/Helpers');
$loader->addNamespace('\League\Plates', '/Vendor/Plates/src');

//$engine = new Engine();
//echo $engine->render("template.php", array());


