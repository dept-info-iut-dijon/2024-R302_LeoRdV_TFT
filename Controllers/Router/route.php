<?php
namespace Router;
use Exception;
/**
 * Abstract class defining the different routes
 */
abstract class Route{
    /**
     * Runs the method needed according to the method passed in parameter
     * @param array $param
     * @param string $method
     * @return void
     */
    public function action(array $param = [], string $method = 'GET'): void{
        if ($method == 'POST') return $this->post($param);
        else return $this->get($param);
    }

    /**
     * IDFK
     * @param array $array
     * @param string $paramName
     * @param bool $canBeEmpty
     * @throws \Exception
     * @return mixed
     */
    protected function getParam(array $array, string $paramName, bool $canBeEmpty=true)
    {
        if (isset($array[$paramName])) {
            if(!$canBeEmpty && empty($array[$paramName]))
                throw new Exception("Paramètre '$paramName' vide");
            return $array[$paramName];
        } else
            throw new Exception("Paramètre '$paramName' absent");
    }
    /**
     * UWU asbtract methods
     * @param array $param
     * @return void
     */
    public abstract function get(array $param =[]):void;
    /**
     * UWU asbtract methods
     * @param array $param
     * @return void
     */
    public abstract function post(array $param =[]):void;

    public function __construct(){}
}