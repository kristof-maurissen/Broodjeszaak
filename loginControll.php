<?php
//use BroodjesProject\Exceptions\;
use BroodjesProject\Business\UserService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

session_start();

if (isset($_GET["action"]) && $_GET["action"] == "login") {
        $userservice = new UserService;
        $toegelaten = $userservice->controlUser($_POST["txtEmail"], $_POST["txtPaswoord"]);
        
        if ($toegelaten) {
            $_SESSION["aangemeld"] = true; 
            header ("location: bestelbroodjesControll.php"); 
            exit(0);
        
        }else {
            header ("location: loginControll.php");
            exit(0);
            
        }
} 




    $view = $twig->render("Login.twig", array());
    print($view);

