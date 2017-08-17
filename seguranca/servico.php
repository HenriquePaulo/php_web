<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 11/08/2017
 * Time: 12:49
 */

$passo = (isset($_GET['p'])) ? $_GET['p'] : "";

session_start();

switch($passo){
    case "spoofing":
        spoofing();
        break;

}

function spoofing(){
    include_once '../libs/securimage/securimage.php';

    $securimage = new Securimage();
    if ($securimage->check($_POST['captcha_code']) == false) {
        echo "o codigo digitado e invalido";
        exit;
    }

    echo "o codigo digitado e valido! sucesso!";
}
