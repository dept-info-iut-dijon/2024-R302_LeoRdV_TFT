<?php
namespace Models;
use PDO;
use PDOStatement;

class UnitPDO extends BasePDODAO{
    /**
     * Function that gets every Unit in the DB
     * @return array of units
     */
    public function getAll(): array{
        $temp = $this->execRequest("SELECT * FROM UNIT", null);
        $temp->setFetchMode(PDO::FETCH_CLASS, 'Models\Unit');
        $units = $temp->fetchAll();
        return $units;
    }

    /**
     * Gets a unit from an ID
     * @param string $idUnit
     * @return ?Unit
     */
    public function getById(string $idUnit): ?Unit{
        $temp = $this->execRequest("SELECT * FROM UNIT WHERE id = ?", array($idUnit));
        $temp->setFetchMode(PDO::FETCH_CLASS, 'Models\Unit');
        $unit = $temp->fetch();
        if ($unit === false) {
            return null; 
        }
    
        echo $unit->getName(); 
    
        return $unit;
    }

    /**
     * Hydrates Unit objects from the db
     * useless now
     * @param array $arr
     * @return Unit
     */
    public function hydrate(array $arr): Unit{
        $unit = new Unit();
        $unit->setId($arr["id"]);
        $unit->setName($arr["name"]);
        $unit->setCost($arr["cost"]);
        $unit->setOrigin($arr["origin"]);
        $unit->setUrl_img($arr["url_img"]);
        return $unit;
    }
}