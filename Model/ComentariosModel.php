<?php

class ComentariosModel{

    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=pair;charset=utf8', 'root', '');
    }

    public function obtenerComentarios(){
        $query = $this->db->prepare('SELECT * FROM comentarios');
        $query->execute();

        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function obtenerComentario($id){
        $query = $this->db->prepare('SELECT * FROM comentarios WHERE id_producto = ?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function borrar($idComentario){
        $query = $this->db->prepare('DELETE FROM comentarios WHERE id_comentario = ?');
        $query->execute([$idComentario]);
        return $query->rowCount();
    }
    
    public function guardar($contenido, $puntuacion, $usuario, $producto){
        $query = $this->db->prepare('INSERT INTO comentarios(contenido, puntuacion, id_usuario, id_producto) VALUES(?,?,?,?)');
        $query->execute([$contenido, $puntuacion, $usuario, $producto]);
        $fetch = $query->fetch(PDO::FETCH_OBJ);
        return $fetch;
    }
    
}
