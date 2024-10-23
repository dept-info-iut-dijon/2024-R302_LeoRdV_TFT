<?php

use Helpers\Psr4AutoloaderClass;
require_once "Helpers\Psr4AutoLoaderClass.php";

$loader = new Psr4AutoloaderClass();
$loader->register();

