<?php

//conexao com o BD
$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "exemplo01";

try{
    $pdo = new PDO('mysql:host='. $db_host. ';port=3306;dbname='. $db_name, $db_user, $db_pass);
}catch (PDOException $e){
    echo $e->getMessage();
}

$site_titulo = "curso de PHP";

//dados do sistema
$sistema_pasta_upload = "upload";