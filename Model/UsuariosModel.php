<?php

class UsuariosModel{

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=pair;charset=utf8', 'root', '');
    }

    /**
     * Retorna un usuario según el email pasado.
     */
    public function getByUsername($email) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute(array($email));

        return $query->fetch(PDO::FETCH_OBJ);
    }

    public function getIdUser($id) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE id_usuario = ?');
        $query->execute(array($id));

        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    public function getusuarios(){
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);

    }

    public function guardarUsuario($email, $hash, $rol) {
        $query = $this->db->prepare('INSERT INTO usuario(email, contraseña, rol) VALUES(?,?,?)');
        $query->execute([$email, $hash, $rol]);
        
        return $this->db->lastInsertId();
    }

    public function AsignarAdmin($rol, $user){
        $sentencia =  $this->db->prepare("UPDATE usuario SET  rol=? WHERE id_usuario=?");
        $sentencia->execute(array($rol, $user));
    }

    function eliminarUsuario($usuario){
        $sentencia = $this->db->prepare("DELETE FROM usuario WHERE id_usuario = ?");
        $sentencia->execute(array($usuario));
        header("Location: ".basehref."usuarios");
    }


}
