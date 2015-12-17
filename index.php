<?php
use BroodjesProject\Business\UserService;
require_once ("Bootstrap.php");


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       /* 
        print_r ($userLijst);
        
       $char = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
       $paswoord= substr(sha1(rand()),0,4);
       print $paswoord;*/
        
       // $userService = new UserService();
        //$newPaswoord = $userService->genRandomPaswoord();

//print $newPaswoord;
        $userService = new UserService();
        $userEmail = $userService->newUser("email@email");
        print($userEmail);
       // $newpas = $userService->genRandomPaswoord();
       // print($newpas);
        $pas = $userService->checkEmail("emailemail");
        print_r($pas);
        
        
        
        
        ?>
        
    </body>
</html>
