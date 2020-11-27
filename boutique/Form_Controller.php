<?php

require 'Connection_Model.php';
require 'Session_Model.php';

$session = new Session_Model();
$session ->comprobar();

$connection = new Connection();

$title = '<h1>Añadir Producto</h1>';


if (isset($_GET['product_id'])){
    //update product
    $title = '<h1>Modificar Producto</h1>';
    $product = $connection->getProduct();
    $product_id = $_GET['product_id'];
    $hidden_input_product_id = '<input type="hidden" id="product_id" name="product_id" value="'.$product_id.'">';


}

if (isset($_POST['product_id'])){
    $connection->updateProduct();
    header('location: Boutique_View.php');
}


elseif (($_SERVER['REQUEST_METHOD']) == 'POST'){
    //insert product

    $connection-> addProduct();
    //$title = '<h1>Añadir producto</h1>';
    header('location: Boutique_View.php');
}









