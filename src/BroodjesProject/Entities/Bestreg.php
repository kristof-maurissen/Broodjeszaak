<?php
//src/BroodjesProject/Entities/Bestreg.php


namespace BroodjesProject\Entities;

class Bestreg{
    
    private static $idMap = array();
    
    private $bestelnr;
    private $klantnr;
    private $artnr;
    private $aantal;
    private $prijs;
   
    
    
    private function __construct($bestelnr, $klantnr, $artnr, $aantal, $prijs) {
        $this->bestelnr = $bestelnr;
        $this->klantnr  = $klantnr;
        $this->artnr    = $artnr;
        $this->aantal   = $aantal;
        $this->prijs    = $prijs;
    }
    
    public static function create($bestelnr, $klantnr, $artnr, $aantal, $prijs) {
        if (!isset(self::$idMap[$id])) {
            self::$idMap[$id] = new Bestreg($bestelnr, $klantnr, $artnr, $aantal, $prijs);
        }
        return self::$idMap[$id];
    }
    
    public function getBestelNr(){
        return $this->bestelnr;
    }
    
    public function getKLantNr(){
        return $this->klantnr;
    }
    
    public function getArtNr(){
        return $this->artnr;
    }
    
    public function getAantal(){
        return $this->aantal;
    }
    
    public function getPrijs() {
        return $this->prijs;
    }
    
            
}


