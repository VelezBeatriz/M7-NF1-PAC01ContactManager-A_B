<!-- Comprobar el fichero class.DataManager.php -->
<?php
//Lo requiero 1 sola vez
require_once('class.DataManagerB.php');

//Llamamos al método getAddressObjectsForEntity de su clase
$address = DataManager::getAddressObjectsForEntity(1);

//Llamamos al método getEmailObjectsForEntity de su clase
$email = DataManager::getEmailObjectsForEntity(2);

//Llamamos al método getPhoneNumberObjectsForEntity de su clase
$phone = DataManager::getPhoneNumberObjectsForEntity(3);


echo "<h2>Address</h2>";
echo "<pre>";
var_dump($address);
echo "</pre>";
echo "<h2>Email</h2>";
echo "<pre>";
var_dump($email);
echo "</pre>";
echo "<h2>Phone</h2>";
echo "<pre>";
var_dump($phone);
echo "</pre>";



?>