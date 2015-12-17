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
    
    public function genRandomPaswoord() {
        $length = 4;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters = str_shuffle($characters);
        $newpaswoord = substr($characters, 0, $length);
        return $newpaswoord;
    }
    
    public function newUser($email) {
        $userService = new UserService();
        $paswoord = $userService->genRandomPaswoord();
        $paswoord = sha1($paswoord);
        $email = $userService->checkEmail($email);
        $userDAO = new UserDAO();
        $user = $userDAO->createUser($email, $paswoord);
        $userService = new UserService();
        
        
        }
    
    public function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === true){
        $userEmail = User::getEmail();
        if ($userEmail !== $email){
            $email = true;
        } else {
            return false;
        }
        }
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

