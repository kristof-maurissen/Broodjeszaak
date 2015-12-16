<?php
//use BroodjesProject\Exceptions\;
//use BroodjesProject\Business\Service;
use BroodjesProject\Business\UserService;

require_once ("Bootstrap.php");
require_once ("Libraries/Twig/AutoLoader.php");

session_start();

//date_default_timezone_set("Europe/ Brussels");

print date("j F Y");
print "<br />"; 
print "<br />";
print date("h:i:s A");


$view = $twig->render("Registreer.twig", array());
    print($view);