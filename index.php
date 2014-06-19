<?php

require_once 'PDO/PDOConnection.php' ; 
require_once 'GeneratInterface.php';
require_once 'Mysqli/MySqliDBConnection.php';
echo "------------------------------------------";
echo "<br>"; 

//$obj = new MySqliDBConnection ; 
$obj = new PDOConnection ; 
$gen = new GeneratInterface($obj) ; 
$gen->generateInterface(); 
echo "<br>";
echo "------------------------------------------";

?>
