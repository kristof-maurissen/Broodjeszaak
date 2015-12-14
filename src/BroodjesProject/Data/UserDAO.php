<?php
//src/BroodjesProject/Data/DrankDAO.php

namespace BroodjesProject\Data;

use BroodjesProject\Data\DBConfig;
use BroodjesProject\Entities\Users;
//use BroodjesProject\Exceptions;
use PDO;

class UserDAO {
    
    public function getAll() {
        $sql = "select * from users"; 
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $resultSet = $dbh->query($sql);
        $lijst = array(); 
        
        foreach ($resultSet as $rij) {
            $users = Users::create($rij["id"], $rij["email"], $rij["paswoord"], $rij["geregistreerd"]); 
            array_push($lijst, $users);  
        } 
            $dbh = null; 
            return $lijst;       
    }
    
    public function getUserByEmail($email) {
        $sql = "select id, email, paswoord, geregistreerd from users where email = :email";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        
        $stmt = $dbh->prepare($sql); 
        $stmt->execute(array(':email' => $email)); 
        $rij = $stmt->fetch(PDO::FETCH_ASSOC);
         
        $users = Users::create($rij["id"], $rij["email"], $rij["paswoord"], $rij["geregistreerd"]);
        
        $dbh = null; 
        return $users; 
    }
    
    public function createUser($email, $paswoord, $geregistreerd) {
        $sql = "insert into users (email, paswoord, geregistreerd) values(:email, :paswoord, :geregistreerd)";
        $dbh = new PDO(DBConfig::$DB_CONNSTRING, DBConfig::$DB_USERNAME, DBConfig::$DB_PASSWORD);
        $stmt = $dbh->prepare($sql);
        $stmt->execute(array( ":email" => $email, ":paswoord" => $paswoord, ":geregistreerd" => $geregistreerd));
        $dbh = null;
    }
}

