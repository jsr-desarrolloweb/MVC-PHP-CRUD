<?php

    require 'Login_Controller.php';

?>


<form action="" method="post">
    <label for="username">Usuario</label>
    <input type="text" name="username" id="username">
    <label for="password">Contraseña</label>
    <input type="text" name="password" id="password">
    <input type="submit" value="Acceder">

    <?php
        if (isset($msg)){
            echo $msg;
        }

    ?>

</form>
