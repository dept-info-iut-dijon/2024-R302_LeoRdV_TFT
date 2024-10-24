<?php
use Config\Config;
abstract class BasePDODAO{
    private $db;

    public function __construct(){
       
    }

    public function getDB():PDO{
        if (is_null($this->db)){
            
            $this->db = new PDO(
            Config::get('dsn'),
            Config::get('user'),
            Config::get('pass'));
        }
        return $this->db;
    }

}