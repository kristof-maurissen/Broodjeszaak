<?php
//src/BroodjesProject/Business/BroodService.php

namespace BroodjesProject\Business;
use BroodjesProject\Data\BroodDAO;


class BroodService {
    
    public function getBroodOverzicht() {
        $broodDAO = new BroodDAO(); 
        $lijst = $broodDAO->getAll(); 
        return $lijst; 
    }
}
    

