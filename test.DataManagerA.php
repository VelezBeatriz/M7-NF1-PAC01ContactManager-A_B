<!-- Comprobar el fichero class.DataManager.php -->
<?php
//Lo requiero 1 sola vez
require_once('class.DataManagerA.php');

//Llamamos a la clase getAddressData
$address = DataManager::getAddressData(1);

//Llamamos a la clase getEmailData
$email = DataManager::getEmailData(2);

//Llamamos a la clase getPhoneNumberData
$phone = DataManager::getPhoneNumberData(3);

//Llamamos a la clase getEntityData
$entity = DataManager::getEntityData(2);


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
echo "<pre>";
echo "<h2>Entity</h2>";
var_dump($entity);
echo "</pre>";


?>