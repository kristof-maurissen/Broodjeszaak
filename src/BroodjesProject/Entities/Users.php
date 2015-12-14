<?php
//src/BroodjesProject/Entities/Users.php

namespace BroodjesProject\Entities;

class Users{
    
    private static $idMap = array();
    
    private $id;
    private $email;
    private $paswoord;
    private $geregistreerd;
    
    
    private function __construct($id, $email, $paswoord, $geregistreerd) {
        $this->id = $id;
        $this->email = $email;
        $this->paswoord = $paswoord;
        $this->geregistreerd = $geregistreerd;
        
    }
    
    public static function create($id, $email, $paswoord, $geregistreerd) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Users($id, $email, $paswoord, $geregistreerd);
        }
        return self::$idMap[$id];
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getEmail(){
        return $this->email;
    }
    
    public function getPaswoord(){
        return $this->paswoord;
    }
    
    public function getGeregistreerd() {
        return $this->geregistreerd;
    }
    
            
}

