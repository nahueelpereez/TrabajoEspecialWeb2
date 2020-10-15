<?php

class ProductosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=pair;charset=utf8', 'root', '');
    }

    public function getProductos() {
        $query = $this->db->prepare('SELECT * FROM producto ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getProducto($idProducto) {
        $query = $this->db->prepare('SELECT * FROM producto WHERE id_producto = ?');
        $query->execute(array($idProducto));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    /*function guardar($nombre, $marca, $talle, $precio, $idCategoria){
        $sentencia = $this->db->prepare("INSERT INTO producto(nombre, marca, talle, precio, categoria) VALUES ('$nombre','$marca','$talle', $precio, $idCategoria)");
        $sentencia->execute();
    }*/

    
    function eliminar($idProducto){
        $query = $this->db->prepare('DELETE FROM producto WHERE id_producto = ?');
        $query->execute([$idProducto]);
    }

    public function editarProducto($nombre, $marca, $talle, $precio, $idCategoria, $idProducto){
        $query = $this->db->prepare('UPDATE producto SET nombre=?, marca=?, talle=?, precio=?, id_categoria=? WHERE id_producto=?');
        $query->execute(array($nombre, $marca, $talle, $precio, $idCategoria, $idProducto));
        header("Location: " . basehref . "productos");
    }

    public function obtenerNombreCategoria() {
        $query = $this->db->prepare('SELECT n.*, e.nombre as nombre_categoria FROM producto n JOIN categoria e  ON e.id_categoria = n.id_categoria');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
       
    }
    
    public function guardar($nombre, $marca, $talle, $precio, $idCategoria) {
        $query = $this->db->prepare("INSERT INTO producto(nombre, marca, talle, precio, id_categoria) VALUES(?,?,?,?,?)");
        $query->execute(array($nombre, $marca, $talle, $precio, $idCategoria));
        //return $this->db->lastInsertId();
    }
    
}