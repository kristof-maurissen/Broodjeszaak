<?php
//src/BroodjesProject/Data/BroodDAO.php

namespace BroodjesProject\Data;

use BroodjesProject\Data\DBConfig;
use BroodjesProject\Entities\Brood;
//use BroodjesProject\Exceptions;
use PDO;

class BroodDAO {
    
    public function getAll() {
        $sql = "select * from broodjes"; 
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array(); 
        
        foreach ($resultSet as $rij) {
            $brood = Brood::create($rij["id"], $rij["broodsoort"], $rij["prijs"]); 
            array_push($lijst, $brood);  
        } 
            $dbh = null; 
            return $lijst;       
    }
}

