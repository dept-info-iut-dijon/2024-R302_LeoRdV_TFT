<?php
namespace Controllers;

use League\Plates\Engine;
use Models\UnitPDO;
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
        $pdo = new UnitPDO;
        $pdo->getDB();
        $all = $pdo->getAll();
        $francis = $pdo->getById("00000");
        $noone = $pdo->getById("777");
        echo $this->templates->render('home', ['tftSetName' => 'Remix Rumble', "all" => $all, "francis" => $francis, "noone"=> $noone]);
    }
}