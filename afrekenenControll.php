<?php
//use BroodjesProject\Exceptions\;
//use BroodjesProject\Business\BelegService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

//$belegSvc = new BelegService(); 
//$belegLijst = $belegSvc->getBelegOverzicht();

session_start();

         

$view = $twig->render("Afrekenen.twig", array());
    print($view);
