<?php
require_once "BasePDODAO.php";
require_once "Unit.php";
class UnitPDO extends BasePDODAO{
    /**
     * Function that gets every Unit in the DB
     * @return array of units
     */
    public function getAll(): array{
        $temp = $this->execRequest("SELECT * FROM UNIT", null);
        $data = $temp->fetchAll();
        $arr = [];
        foreach($data as $value){
            $arr[] = $this->hydrate($value);
        }
        return $arr;
    }

    /**
     * Gets a unit from an ID
     * @param string $idUnit
     * @return ?Unit
     */
    public function getById(string $idUnit): ?Unit{
        $temp = $this->execRequest("SELECT * FROM UNIT WHERE id == ?", array($idUnit));
        $unit = $this->hydrate($temp->fetchAll());
        return $unit;
    }

    /**
     * Hydrates Unit objects from the db
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