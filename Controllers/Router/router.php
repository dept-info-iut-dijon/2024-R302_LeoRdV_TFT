<?php
namespace Router;
use Controllers\MainController;
use League\Plates\Engine;
use Route;
use Route\RouteIndex;
use Exception;
 /**
  * Router class ?
  */
class Router{
    /** Array<string => Route>
     */
    private array $routeList = [];
    /**Array <string => Controller */
    private array $ctrlList = [];

    private string $actionKey;
    /**
     * Constuctor of the class
     * @param string $nameOfActionKey i have no idea what the point is
     */
    public function __construct(string $nameOfActionKey = 'action'){
      $this->actionKey = $nameOfActionKey;
      $this->CreateControllerList();
      $this->CreateRouteList();
    }

    /**
     * Creates the list of controllers
     * @return void
     */
    private function CreateControllerList():void{
      $this->ctrlList[] = ["main" => new MainController(new Engine(__DIR__."/Views"))];
    }
    /**
     * Creates the list of routes
     * @return void
     */
    private function CreateRouteList():void{
      $this->routeList[] = ["index" => new RouteIndex($this->ctrlList["main"])];
    }
    /**
     * Does the rooting but idk how it works
     * @param mixed $get
     * @param mixed $post
     * @return void
     */
    public function Routing($get, $post):void{
      $action = $get[$this->actionKey] ?? 'index'; // Défaut : index
      $route = $this->routeList[$action] ?? null;
      if (!$route) {
        $route = $this->routeList['index'];
    }
    $method = !empty($post) ? 'POST' : 'GET';
    $params = $method === 'POST' ? $post : $get;
    return $route->action($params, $method); 
    }
}