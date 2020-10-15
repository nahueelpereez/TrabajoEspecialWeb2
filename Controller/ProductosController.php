<?php

    require_once('Model/ProductosModel.php');
    require_once('View/ProductosView.php');
    require_once('Model/CategoriasModel.php');
    require_once('Controller/UsuariosController.php');

    class ProductosController{

        private $view;
        private $model;
        private $controller;

        public function __construct(){
            $this->view = new ProductosView();
            $this->model = new ProductosModel();
            $this->modelC = new CategoriasModel();
            $this->controller = new UsuariosController();
        }

        public function MostrarProductos(){
            $productos = $this->model->obtenerNombreCategoria();
            $this->view->mostrarProductos($productos);
        }

        public function MostrarAgregarProductos(){
            if($this->controller->checkLoggedIn()){
                $productos = $this->modelC->getCategorias();
                $this->view->mostrarAgregarProductos($productos);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }

        public function MostrarEditarProductos($params = null){
            if($this->controller->checkLoggedIn()){
                $idProducto = $params[':ID'];
                $producto = $this->model->getProducto($idProducto);
                $productos = $this->modelC->getCategorias();
                $this->view->mostrarEditarProductos($producto, $productos);
            }
            else{
                header("Location: " . basehref . "login");
            }
    }

        public function AgregarProducto() {
                $this->model->guardar($_POST['nombre'], $_POST['marca'], $_POST['talle'], $_POST['precio'], $_POST['id_categoria']);  
            
            header("Location: " . basehref . "productos");
        }

        public function obtenerProducto($params = null) {
        
            $idProducto = $params[':ID'];
            $producto = $this->model->getProducto($idProducto);
    
            if ($producto){ // si existe la noticia
                $this->view->mostrarProducto($producto);
            }else
                $this->view->mostrarError('La noticia no existe');
        }

        public function eliminarProducto($params = null) {
            if($this->controller->checkLoggedIn()){
                $idProducto = $params[':ID'];
                $this->model->eliminar($idProducto);
                header("Location: " . basehref . "productos");
            }
            else{
                header("Location: " . basehref . "login");
            }
        }

        public function editarProducto($params = null){
            $idProducto = $params[':ID'];
            if(isset($_POST['nombre']) && (isset($_POST['marca'])) && (isset($_POST['talle'])) && (isset($_POST['precio'])) && (isset($_POST['id_categoria']))){
                $nombre = $_POST['nombre'];
                $marca = $_POST['marca'];
                $talle = $_POST['talle'];
                $precio = $_POST['precio'];
                $idCategoria = $_POST['id_categoria'];
                $this->model->editarProducto($nombre, $marca, $talle, $precio, $idCategoria, $idProducto);
                header("Location: " . basehref . "productos");
            }
            else {
                $this->view->mostrarError("Faltan datos obligatorios");
            }
        }
    

    }

?>