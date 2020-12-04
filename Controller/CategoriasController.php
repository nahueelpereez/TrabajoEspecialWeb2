<?php

    require_once('Model/CategoriasModel.php');
    require_once('Model/ProductosModel.php');
    require_once('View/CategoriasView.php');
    require_once('HelperLogin.php');

    class CategoriasController{

        private $view;
        private $model;
        private $helperlogin;

        public function __construct(){
            $this->view = new CategoriasView();
            $this->model = new CategoriasModel();
            $this->modelP = new ProductosModel();
            $this->helperlogin = new HelperLogin();
        }

        public function MostrarCategorias(){
            $logged = $this->helperlogin->checkLoggedIn();
            $categorias = $this->model->getCategorias();
            $this->view->mostrarCategorias($categorias, $logged);
        }

        public function MostrarAgregarCategorias(){
            if($this->helperlogin->isAdmin()){
            $logged = $this->helperlogin->checkLoggedIn();
            if($this->helperlogin->checkLoggedIn()){
                $this->view->mostrarAgregarCategorias($logged);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }
        else{
            header("Location: " . basehref . "inicio");
        }
    }

        public function MostrarEditarCategorias($params = null){
            if($this->helperlogin->isAdmin()){
            $logged = $this->helperlogin->checkLoggedIn();
            if($this->helperlogin->checkLoggedIn()){
                $idCategoria = $params[':ID'];
                $categoria = $this->model->getCategoria($idCategoria);
                $this->view->mostrarEditarCategorias($categoria, $logged);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }
        else{
            header("Location: " . basehref . "inicio");
        }
        }

        public function AgregarCategoria() {
            if($this->helperlogin->isAdmin()){
                $this->model->guardar($_POST['nombre'], $_POST['tipo']);  
            
            header("Location: " . basehref . "categorias");
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function obtenerCategoria($params = null) {
        
            $idCategoria = $params[':ID'];
            $categoria = $this->model->getCategoria($idCategoria);
            $logged = $this->helperlogin->checkLoggedIn();
    
            if ($categoria){ // si existe la categoria
                $this->view->mostrarCategoria($categoria, $logged);
            }else
                $this->view->mostrarError('La categoria no existe');
        }

        public function eliminarCategoria($params = null) {
            if($this->helperlogin->isAdmin()){
                if($this->helperlogin->checkLoggedIn()){
                    $idCategoria = $params[':ID'];
                    $this->model->eliminar($idCategoria);
                    header("Location: " . basehref . "categorias");
                }
                else{
                    header("Location: " . basehref . "login");
                }
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function EditarCategoria($params = null){
            if($this->helperlogin->isAdmin()){
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
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function VisualizarItemCategoria($params = null){
            $logged = $this->helperlogin->checkLoggedIn();
            $idCategoria = $params[':ID'];
            $categoria = $this->model->getCategoria($idCategoria);
            $categorias = $this->modelP-> getProductos();
            $this->view->mostrarItemCategoria($categoria, $categorias, $logged);
        }
    

    }

?>