<!-- Comprobar el fichero class.DataManager.php -->
<?php
    //Lo requiero 1 sola vez
    require_once('class.DataManager.php');

    //Llamamos al método
    $address = DataManager::getAddressData(1);

        echo "<pre>";
        var_dump($address);
        echo "</pre>";

    //Llamamos al método

    $addressObj = DataManager::getAddressObjectsForEntity(1);

        echo "<pre>";
        var_dump($addressObj);
        echo "</pre>";

?>