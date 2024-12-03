<?php
namespace Controllers;

use League\Plates\Engine;
abstract class IController{
    private Engine $template;

    /**
     * Contructor of the interface
     * @param \League\Plates\Engine $value
     */
    public function __construct(Engine $value){
        $this->template = $value;
    }

    /**
     * idk bro
     * @return void
     */
    public abstract function index():void;
}