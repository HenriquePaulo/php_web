<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 16/08/2017
 * Time: 19:22
 */

#verifica os BD disponíveis para uso (no php.ini)
foreach (PDO::getAvailableDrivers() as $driver){
    echo $driver . "<br/>";
}