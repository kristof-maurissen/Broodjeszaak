<?php
//src/BroodjesProject/Business/BestregService.php

namespace BroodjesProject\Business;
use BroodjesProject\Data\BestregDAO;


class BestregService {
    
    public function getBestregOverzicht() {
        $bestregDAO = new BestregDAO(); 
        $lijst = $bestregDAO->getAll(); 
        return $lijst; 
    }
    
    public function insertBestelling($id, $keuze) {
        $userDAO = new UserDAO();
        $id = $userDAO->getByUserId($id);
        $bestregDAO =new BestregDAO();
        $bestel = $BestregDAO->insertBestreg($keuze);
        
    }
}
