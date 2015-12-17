<?php
//use BroodjesProject\Exceptions\;
use BroodjesProject\Business\BroodService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");
//require_once ("js/Clock.js");
$broodSvc = new BroodService(); 
$broodLijst = $broodSvc->getBroodOverzicht();

session_start();
    
    if(isset($_GET["action"]) && $_GET["action"] == "beleg") {
       if (isset($_GET["keuze"])) {
           
       }
    } else {
       // header("location: loginControll.php");
    }
         

$view = $twig->render("Broodjes.twig", array("broodLijst" => $broodLijst));
    print($view);