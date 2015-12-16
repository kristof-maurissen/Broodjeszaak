<?php
//src/BroodjesProject/Data/BelegDAO.php

namespace BroodjesProject\Data;

use BroodjesProject\Data\DBConfig;
use BroodjesProject\Entities\Beleg;
//use BroodjesProject\Exceptions;
use PDO;

class BelegDAO {
    
    public function getAll() {
        $sql = "select * from beleg"; 
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array(); 
        
        foreach ($resultSet as $rij) {
            $beleg = Beleg::create($rij["id"], $rij["belegsoort"], $rij["prijs"]); 
            array_push($lijst, $beleg);  
        } 
            $dbh = null; 
            return $lijst;       
    }
}
