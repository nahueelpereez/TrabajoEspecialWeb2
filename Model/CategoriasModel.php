<?php

class CategoriasModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=pair;charset=utf8', 'root', '');
    }

    public function getCategorias() {
        $query = $this->db->prepare('SELECT * FROM categoria ');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getCategoria($idCategoria) {
        $query = $this->db->prepare('SELECT * FROM categoria WHERE id_categoria = ?');
        $query->execute(array($idCategoria));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function guardar($nombre, $tipo) {
        $query = $this->db->prepare('INSERT INTO categoria(nombre, tipo) VALUES(?,?)');
        $query->execute([$nombre, $tipo]);
        
        return $this->db->lastInsertId();
    }

    function eliminar($idCategoria){
        $query = $this->db->prepare('DELETE FROM categoria WHERE id_categoria = ?');
        $query->execute([$idCategoria]);
    }

    public function editarCategoria($nombre, $tipo, $idCategoria){
        $query = $this->db->prepare('UPDATE categoria SET nombre=?, tipo=? WHERE id_categoria=?');
        $query->execute(array($nombre, $tipo, $idCategoria));
    }

}