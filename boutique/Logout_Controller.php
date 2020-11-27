<?php

require 'Session_Model.php';
$session = new Session_Model();
$session->cerrar();
header("location: Login_View.php");
