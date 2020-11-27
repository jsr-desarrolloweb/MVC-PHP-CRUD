<?php
require 'Form_Controller.php';

?>

<?php
if (isset($title)){
    echo $title;
}
?>

<form action="" method="post">

    <!-- PHP: IF    -->
    <?php
    if (isset($hidden_input_product_id)){
        echo $hidden_input_product_id;
    }
    ?>
    <label for="product_name">Nombre</label>
    <input type="text" id="product_name" name="product_name" value="<?php if (isset($product['product_name'])){ echo $product['product_name']; } ?>">
    <label for="product_price">Precio</label>
    <input type="number" id="product_price" name="product_price" value="<?php if (isset($product['product_price'])){ echo $product['product_price']; } ?>">
    <label for="product_description">Descripción</label>
    <input type="text" id="product_description" name="product_description" value="<?php if (isset($product['product_description'])){ echo $product['product_description']; } ?>">
    <input type="submit" value="Añadir">
</form>







