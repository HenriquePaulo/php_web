<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 16/08/2017
 * Time: 19:47
 */

include ("../dbCon.php");

try{
    $pdo = new PDO('mysql:host='. $db_host. ';port=3306;dbname='. $db_name, $db_user, $db_pass);

    //insercao de dados
    $user = "usuario inserido via PDO";
    $idade = 30;
    $senha = sha1("123456");

    $ins = $pdo->prepare("insert into usuario(nome, idade, senha) values(:nome, :idade, :senha)  ");
    $ins->bindParam(":nome", $user);
    $ins->bindParam(":idade", $idade);
    $ins->bindParam(":senha", $senha);

    $ins->execute();
    $ins = null; //fecha a conexao

    //listando dados
    //executa a instrucao sql
    $obj = $pdo->prepare("SELECT id,nome,idade FROM USUARIO");
    if ($obj->execute()){
        //se retornar algum dado
        if ($obj->rowCount() > 0){
            //faz a iteracao com o retorno da consulta
            while($row = $obj->fetch(PDO::FETCH_OBJ)){
                #print_r($row);
                echo $row->id." ".$row->nome." ".$row->idade."<br/>";
            }
        }
    }
    $obj = null; //fecha a conexao
    //listando os dados via PDO
}catch (PDOException $e){
    echo $e->getMessage();
}