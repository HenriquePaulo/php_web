<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "exemplo01";

$conexao = @mysqli_connect($db_host, $db_user, $db_pass, $db_name);

try{
    $pdo = new PDO('mysql:host='. $db_host. ';port=3306;dbname='. $db_name, $db_user, $db_pass);
}catch (PDOException $e){
    echo $e->getMessage();
}