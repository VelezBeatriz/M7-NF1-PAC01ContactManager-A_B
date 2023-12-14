<!-- Comprobar el fichero class.DataManager.php -->
<?php
//Lo requiero 1 sola vez
require_once('class.DataManagerBea.php');

//Llamamos a la clase y 
$address = DataManager::getAddressData(1);

echo "<pre>";
var_dump($address);
echo "</pre>";
?>