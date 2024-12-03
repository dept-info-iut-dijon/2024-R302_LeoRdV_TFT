<?php
namespace Route;
use Controllers\MainController;
use Router\Route;
/**
 * Route of the index
 */
class RouteIndex extends Route{
    /**
     * We'll see when it's done
     * @param array $param
     * @return void
     */
    public function get(array $param): void{
        $this->controller->index();
    }
    /**
     * I have no idea
     * @param array $param
     * @return void
     */
    public function post(array $param):void{}

    private MainController $controller;

    public function __construct(MainController $controller){
        parent::__construct();
        $this->controller = $controller;
    }
} 