<?php
//src/BroodjesProject/Data/BestregDAO.php

namespace BroodjesProject\Data;

use BroodjesProject\Data\DBConfig;
use BroodjesProject\Entities\Bestreg;
//use BroodjesProject\Exceptions;
use PDO;

class BestregDAO {
    
    public function getAll() {
        $sql = "select * from bestreg"; 
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array(); 
        
        foreach ($resultSet as $rij) {
            $bestreg = Bestreg::create($rij["bestelnr"], $rij["klantnr"], $rij["artnr"], $rij["klantnr"], $rij["prijs"]); 
            array_push($lijst, $bestreg);  
        } 
            $dbh = null; 
            return $lijst;       
    }
    
    public function insertBestreg($klantnr, $aantal, $prijs) {
        $sql = "insert into bestreg (klantnr, artnr, aantal, prijs) values(:klantnr, :artnr, :aantal, :prijs)";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array( ":klantnr" => $klantnr, ":artnr" => $artnr, ":aantal" => $aantal, ":prijs" => $prijs));
        $dbh = null;
    }
}
