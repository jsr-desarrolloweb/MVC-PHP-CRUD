<?php
require 'Boutique_Controller.php';
?>
<h1>Lista de Productos</h1>
<p>Usuario: <strong><?php echo $_SESSION['username'];  ?></strong></p>


<a href="Form_View.php"><p>Añadir Producto</p></a>
<ul>
    <?php
    if (isset($products))  {
        foreach ($products as $product){
            echo '<li>'.$product["product_name"].
                 ' - '.$product["product_price"].
                 ' - '.$product["product_description"].
                 '<a href="Form_View.php?product_id='.$product['product_id'].'">  Modificar  </a>
                  <a onclick="envia_post('.$product["product_id"].')">  Eliminar  </a></li>';
            //echo $product["product_name"];
        }}
    ?>
</ul>

<a href="Logout_Controller.php">Cerrar Sesión</a>

<form id="formulario-oculto" action="Delete_Controller.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="product_id">
</form>


<script>
    function envia_post(product_id){
    const modal = confirm("¿Desea borrar el libro?");
    if(modal){
        document.forms['formulario-oculto']['product_id'].value = product_id;
        document.forms['formulario-oculto'].submit();
        console.log(product_id);
    }

    }
</script>





