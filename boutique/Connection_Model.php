<?php

class Connection
{
    private $con;

    public function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=tienda", "root", "");
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexion establecida!";
        } catch (PDOException $e) {
            die('Error: ' . $e->getMessage());
        }
    }

    public function login(){
        $sql =  $this->con->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $sql->bindParam(':username', $_POST['username']);
        $sql->bindParam(':password', $_POST['password']);
        $sql ->execute();
        $result = $sql -> fetch();
        return $result;
    }

    public function getProducts(){
        $sql =  $this->con->prepare("SELECT * FROM products");
        $sql ->execute();
        $result = $sql -> fetchAll();
        return $result;
    }

    public function getProduct(){
        $sql =  $this->con->prepare("SELECT * FROM products WHERE product_id = :product_id");
        $sql -> bindParam(':product_id', $_GET['product_id']);
        $sql ->execute();
        $result = $sql -> fetch();
        return $result;
    }


    public function addProduct(){
        $sql = $this->con->prepare("INSERT INTO products (product_name, product_price, product_description) VALUES (:product_name, :product_price, :product_description)");
        $sql -> bindParam(':product_name', $_POST['product_name']);
        $sql -> bindParam(':product_price', $_POST['product_price']);
        $sql -> bindParam(':product_description', $_POST['product_description']);
        $sql -> execute();
    }

    public function updateProduct()
    {
        $sql = $this ->con ->prepare("UPDATE products
                                                SET product_name = :product_name, product_price = :product_price, product_description = :product_description
                                                WHERE product_id = :product_id
                                                 ");
        $sql -> bindParam(':product_id', $_POST['product_id']);
        $sql -> bindParam(':product_name', $_POST['product_name']);
        $sql -> bindParam(':product_price', $_POST['product_price']);
        $sql -> bindParam(':product_description', $_POST['product_description']);
        $sql -> execute();

    }

    public function deleteProduct(){
        $sql = $this -> con ->prepare("DELETE FROM products WHERE product_id = :product_id");
        $sql->bindParam(':product_id', $_POST['product_id']);
        $sql->execute();
    }




}