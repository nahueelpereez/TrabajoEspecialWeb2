<?php
require_once('Model/ComentariosModel.php');
require_once('./api/ApiView.php');
require_once('./api/ApiController.php');
require_once('./Model/UsuariosModel.php');
require_once('./Model/ProductosModel.php');
require_once('HelperLogin.php');

class ComentariosApiController extends ApiController {

    protected $model;
    protected $modelU;
    protected $modelP;
    protected $view;
    private $helperlogin;
    
    public function __construct(){
        parent::__construct();
        $this->model = new ComentariosModel();
        $this->modelU = new UsuariosModel();
        $this->modelP = new ProductosModel();
        $this->view = new ApiView();
        $this->helperlogin = new HelperLogin();
    }

    public function obtenerComentarios(){
        $comentarios = $this->model->obtenerComentarios();
        $this->view->response($comentarios, 200);
    }

    public function obtenerComentario($params = null){
        $id = $params[':ID'];
        $comentario = $this->model->obtenerComentario($id);
        if($comentario){
            $this->view->response($comentario, 200);
        }
        else{
            $this->view->response("No existe el comentario con el id={$id}", 404);
        }
    }

    public function eliminarComentario($params = null) {
        if($this->helperlogin->isAdmin()){
            $idComentario = $params[':ID'];
            $borrar = $this->model->borrar($idComentario);

            if ($borrar > 0) {
                $this->view->response("Comentario id=$idComentario eliminado con éxito", 200);
            }
            else {
                $this->view->response("Comentario id=$idComentario not found", 404);
            }
        }
        else{
            $this->view->response("No tiene los permisos para realizar esta accion", 401);
        }
    }

    public function agregarComentario(){
        $body = $this->getData();
        if(!empty($body->contenido)){
            $puntuacion = $body->puntuacion;
            $contenido = $body->contenido;
            $id_producto = $body->id_producto;
            if($this->helperlogin->checkLoggedIn()){
                $usuario = $this->modelU->getByUsername($_SESSION["email"]);
                $user = $usuario->id_usuario;
                $this->model->guardar($contenido,$puntuacion,$user,$id_producto);
                $this->view->response("Se ha agregado un nuevo comentario correctamente.", 200);
            }else{
                $this->view->response("No tiene los permisos para realizar esta accion", 401); 
            }
        }      
    }      
        
        
        /*$body = $this->getData(); // lo obtengo del body
        $this->helperlogin->checkLoggedIn();
        // inserta el comentario
        $idComentario = $this->model->guardar($body->contenido, $body->puntuacion, $body->id_usuario, $body->id_producto);
        // obtengo el comentario recien creado
        $comentarioNuevo = $this->model->obtenerComentario($idComentario);
        
        if (!($comentarioNuevo)){
            die("has");
            $this->view->response($comentarioNuevo, 200);
        }
        else{
            $this->view->response("Error al insertar el comentario", 500);
        }

    }*/    
}