<?php

    require_once('Model/ProductosModel.php');
    require_once('View/ProductosView.php');
    require_once('Model/CategoriasModel.php');
    require_once('Controller/UsuariosController.php');
    require_once('HelperLogin.php');

    class ProductosController{

        private $view;
        private $model;
        private $helperlogin;

        public function __construct(){
            $this->view = new ProductosView();
            $this->model = new ProductosModel();
            $this->modelC = new CategoriasModel();
            $this->helperlogin = new HelperLogin();
        }

        public function MostrarProductos(){
            $logged = $this->helperlogin->checkLoggedIn();
            $productos = $this->model->obtenerNombreCategoria();
            $this->view->mostrarProductos($productos, $logged);
        }

        public function MostrarAgregarProductos(){
            if($this->helperlogin->isAdmin()){
            $logged = $this->helperlogin->checkLoggedIn();
            if($this->helperlogin->checkLoggedIn()){
                $productos = $this->modelC->getCategorias();
                $this->view->mostrarAgregarProductos($productos, $logged);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }
        else{
            header("Location: " . basehref . "inicio");
        }
        }

        public function MostrarEditarProductos($params = null){
            if($this->helperlogin->isAdmin()){
            $logged = $this->helperlogin->checkLoggedIn();
            if($this->helperlogin->checkLoggedIn()){
                $idProducto = $params[':ID'];
                $producto = $this->model->getProducto($idProducto);
                $productos = $this->modelC->getCategorias();
                $this->view->mostrarEditarProductos($producto, $productos, $logged);
            }
            else{
                header("Location: " . basehref . "login");
            }
        }
        else{
            header("Location: " . basehref . "inicio");
        }
    }

        public function AgregarProducto() {
            if($this->helperlogin->isAdmin()){
                if(isset($_FILES['imagen'])){
                    $imagenes = getcwd() . "/imagenes/";
                    $destino = tempnam($imagenes, $_FILES['imagen']['name']);
                    move_uploaded_file($_FILES['imagen']['tmp_name'], $destino);
                    $destino = basename($destino);
                    $this->model->guardarConImagen($_POST['nombre'], $_POST['marca'], $_POST['talle'], $_POST['precio'], $_POST['id_categoria'], $_FILES['imagen']);  
                    header("Location: " . basehref . "productos");
                }
                else{
                    $this->model->guardar($_POST['nombre'], $_POST['marca'], $_POST['talle'], $_POST['precio'], $_POST['id_categoria']);
                    header("Location: " . basehref . "productos");
                }
            
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function obtenerProducto($params = null) {
        
            $id = $params[':ID'];
            $producto = $this->model->getProducto($id);
            $logged = $this->helperlogin->checkLoggedIn();
    
            if ($producto){ // si existe el producto
                $this->view->mostrarProducto($producto, $logged);
            }else
                $this->view->mostrarError('La noticia no existe');
        }

        public function eliminarProducto($params = null) {
            if($this->helperlogin->isAdmin()){
                if($this->helperlogin->checkLoggedIn()){
                    $idProducto = $params[':ID'];
                    $this->model->eliminar($idProducto);
                    header("Location: " . basehref . "productos");
                }
                else{
                    header("Location: " . basehref . "login");
                }
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function editarProducto($params = null){
            if($this->helperlogin->isAdmin()){
                if($this->helperlogin->checkLoggedIn()){
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
                else{
                    header("Location: " . basehref . "login");
                }
            }
            else{
                header("Location: " . basehref . "inicio");
            }

        }
    

    }

?>