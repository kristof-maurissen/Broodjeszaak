<?php
//src/BroodjesProject/Entities/Beleg.php


namespace BroodjesProject\Entities;

class Beleg{
    
    private static $idMap = array();
    
    private $id;
    private $belegsoort;
    private $prijs;
   
    
    
    private function __construct($id, $belegsoort, $prijs) {
        $this->id = $id;
        $this->belegsoort = $belegsoort;
        $this->prijs = $prijs;
    }
    
    public static function create($id, $belegsoort, $prijs) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Beleg($id, $belegsoort, $prijs);
        }
        return self::$idMap[$id];
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getBelegsoort(){
        return $this->belegsoort;
    }
    
    public function getPrijs() {
        return $this->prijs;
    }
    
            
}
