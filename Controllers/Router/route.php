<?php
abstract class Route{
    public function action(array $param = [], string $method = 'GET'): void{
        if ($method == 'POST') return $this->post($param);
        else return $this->get($param);
    }

    protected function getParam(array $array, string $paramName, bool $canBeEmpty=true)
    {
        if (isset($array[$paramName])) {
            if(!$canBeEmpty && empty($array[$paramName]))
                throw new Exception("Paramètre '$paramName' vide");
            return $array[$paramName];
        } else
            throw new Exception("Paramètre '$paramName' absent");
    }
    public abstract function get(array $param =[]):void;
    public abstract function post(array $param =[]):void;
}