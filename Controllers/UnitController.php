<?php
namespace Controllers;
use League\Plates\Engine;

class UnitController{
    private $templates;

    /** 
    * Construct the unitController using an engine in parameters
    * @param Engine $value  engine to use for rendering the pages, will be kept in 
    *                       $templates
    **/
    public function __construct(Engine $value){
        $this->templates = $value;
    }
}