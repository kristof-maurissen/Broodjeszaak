<?php
//src/BroodjesProject/Entities/Brood.php


namespace BroodjesProject\Entities;

class Brood{
    
    private static $idMap = array();
    
    private $id;
    private $broodsoort;
    private $prijs;
   
    
    
    private function __construct($id, $broodsoort, $prijs) {
        $this->id = $id;
        $this->broodsoort = $broodsoort;
        $this->prijs = $prijs;
    }
    
    public static function create($id, $broodsoort, $prijs) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Brood($id, $broodsoort, $prijs);
        }
        return self::$idMap[$id];
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getBroodsoort(){
        return $this->broodsoort;
    }
    
    public function getPrijs() {
        return $this->prijs;
    }
    
            
}

