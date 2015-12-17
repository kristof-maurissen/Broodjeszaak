<?php
//use BroodjesProject\Exceptions\;
//use BroodjesProject\Business\Service;
use BroodjesProject\Business\UserService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");



session_start();

if (isset($_POST["action"]) && $_POST["action"] == "registreer") {
    $email = $_GET["textemail"];
    $email = filter_var($email, FILTER_VALIDATE_EMAIL);
    //$email = htmlspecialchars($email);
    
  
        if($email) {
            $userService = new UserService();
            $userEmail = $userService->checkEmail($email);
                
                $userEmail = $userService->newUser();
           
            header ("location: bestelbroodjesControll.php"); 
            exit(0);
             
        } else {
            
            header ("location: registrerenContoll.php");
}
}

 /*if (empty($_GET["textemail"])) {
     $emailErr = "Email is required";
   } else {
     $email = $_GET["textemail"];
     print($email);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }*/



$view = $twig->render("Registreer.twig", array());
    print($view);
    
    
    
/*print date("j F Y");
print "<br />"; 
print "<br />";
print date("h:i:s A");*/