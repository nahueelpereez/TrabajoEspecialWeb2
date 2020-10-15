<?php

    require_once('Model/CategoriasModel.php');
    require_once('Model/ProductosModel.php');
    require_once('View/CategoriasView.php');
    require_once('Controller/UsuariosController.php');

    class CategoriasController{

        private $view;
        private $model;
        private $controller;

        public function __construct(){
            $this->view = new CategoriasView();
            $this->model = new CategoriasModel();
            $this->modelP = new ProductosModel();
            $this->controller = new UsuariosController();
        }

        public function MostrarCategorias(){
            $categorias = $this->model->getCategorias();
            $this->view->mostrarCategorias($categorias);
        }

        public function MostrarAgregarCategorias(){
            if($this->controller->checkLoggedIn()){
                $this->view->mostrarAgregarCategorias();
            }
            else{
                header("Location: " . basehref . "login");
            }
        }

        public function MostrarEditarCategorias($params = null){
            if($this->controller->checkLoggedIn()){
                $idCategoria = $params[':ID'];
                $categoria = $this->model->getCategoria($idCategoria);
                $this->view->mostrarEditarCategorias($categoria);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }

        public function AgregarCategoria() {
                $this->model->guardar($_POST['nombre'], $_POST['tipo']);  
            
            header("Location: " . basehref . "categorias");
        }

        public function obtenerCategoria($params = null) {
        
            $idCategoria = $params[':ID'];
            $categoria = $this->model->getCategoria($idCategoria);
    
            if ($categoria){ // si existe la categoria
                $this->view->mostrarCategoria($categoria);
            }else
                $this->view->mostrarError('La categoria no existe');
        }

        public function eliminarCategoria($params = null) {
            if($this->controller->checkLoggedIn()){
                $idCategoria = $params[':ID'];
                $this->model->eliminar($idCategoria);
                header("Location: " . basehref . "categorias");
            }
            else{
                header("Location: " . basehref . "login");
            }
        }

        public function EditarCategoria($params = null){
            $idCategoria = $params[':ID'];
            if(isset($_POST['nombre']) && (isset($_POST['tipo']))){
                $nombre = $_POST['nombre'];
                $tipo = $_POST['tipo'];
                $this->model->editarCategoria($nombre, $tipo, $idCategoria);
                header("Location: " . basehref . "categorias");
            }
            else {
                $this->view->mostrarError("Faltan datos obligatorios");
            }
        }

        public function VisualizarItemCategoria($params = null){
            $idCategoria = $params[':ID'];
            $categoria = $this->model->getCategoria($idCategoria);
            $categorias = $this->modelP-> getProductos();
            $this->view->mostrarItemCategoria($categoria, $categorias);
        }
    

    }

?>