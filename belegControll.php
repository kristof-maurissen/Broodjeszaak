<?php
//use BroodjesProject\Exceptions\;
use BroodjesProject\Business\BelegService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

$belegSvc = new BelegService(); 
$belegLijst = $belegSvc->getBelegOverzicht();

session_start();

         

$view = $twig->render("Beleg.twig", array("belegLijst" => $belegLijst));
    print($view);

