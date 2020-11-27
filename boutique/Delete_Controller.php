<?php

require 'Connection_Model.php';
require 'Session_Model.php';

$session = new Session_Model();
$session ->comprobar();

$connection = new Connection();
$connection->deleteProduct();

header('location: Boutique_View.php');
