<?php
use Config\Config;
abstract class BasePDODAO{
    private $db;

    /**
     * Creates DB connection 
     * @return PDO
     */
    public function getDB():PDO{
        if (is_null($this->db)){
            
            $this->db = new PDO(
            Config::get('dsn'),
            Config::get('user'),
            Config::get('pass'));
        }
        return $this->db;
    }
/**
 * Executes SQL requests 
 * @param string $sql the SQL request with "?" where you need params
 * @param array $params Array of parameters, must be in the same order as the "?", null by default
 * @return PDOStatement what the request is showing
 * @return false if no PDOStatement
 */
    protected function execRequest(string $sql, array $params = null):PDOStatement|false{
        $stmt = htmlspecialchars($sql);
        $req = $this->db->prepare($sql);
        $bool = $req->execute($params);
        if ($bool) return $req;
        else return false;
    }

}