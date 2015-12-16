<?php
//src/BroodjesProject/Business/UserService.php

namespace BroodjesProject\Business;
use BroodjesProject\Data\UserDAO;


class UserService {
    
    public function getUserOverzicht() {
        $userDAO = new UserDAO(); 
        $lijst = $userDAO->getAll(); 
        return $lijst; 
    }
    
    public function genRandomPaswoord($length = 4) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = str_shuffle($characters);
        $newpaswoord = substr($characters, 0, $length);
        return $newpaswoord;
    }
    
    public function newUser($email, $paswoord) {
        $userDAO = new UserDAO();
        $user = $userDAO->getUserByEmail($email);
        $userService = new UserService();
        $newPaswoord = $userService->genRandomPaswoord();
        $paswoord = sha1();
        }
    
    public function checkEmail($email) {
        $userDAO = new UserDAO();
        $userEmail = $userDAO->getEmail($email);
        
        
    }
    
    public function controlUser($email, $pwoord) {
        $userDao = new UserDAO();
        $user = $userDao->getUserByEmail($email);
        if (isset($user) && $user->getPaswoord() == $pwoord){
        return true;
        } else {
        return false;
        } 
    }
    
}

