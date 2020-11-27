<?php


require 'Connection_Model.php';
require 'Session_Model.php';

if (($_SERVER['REQUEST_METHOD']) == 'POST'){
    $connection = new Connection();
    if ($connection->login()){
        $session = new Session_Model();
        $session -> iniciar($_POST['username']);
        header('location: Boutique_View.php');
    }else{
        $msg = "Usuario no encontrado";
        //header('location: Login_View.php');
    }
}
