<?php
namespace Controllers;

use League\Plates\Engine;
class MainController
{
    private $templates;

    /** 
    * Construct the mainController using an engine in parameters
    * @param Engine $value  engine to use for rendering the pages, will be kept in 
    *                       $templates
    **/
    public function __construct(Engine $value){
        $this->templates = $value;
    }

    
    /**
     * The index function in PHP renders the 'home' template with the 'tftSetName' variable set to
     * 'Remix Rumble'.
     */
    public function index() : void {
        echo $this->templates->render('home', ['tftSetName' => 'Remix Rumble']);
    }
}