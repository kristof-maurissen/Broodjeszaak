<?php
//src/BroodjesProject/Business/BelegService.php

namespace BroodjesProject\Business;
use BroodjesProject\Data\BelegDAO;


class BelegService {
    
    public function getBelegOverzicht() {
        $belegDAO = new BelegDAO(); 
        $lijst = $belegDAO->getAll(); 
        return $lijst; 
    }
}
  

