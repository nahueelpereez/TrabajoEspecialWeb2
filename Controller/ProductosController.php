<?php

    require_once('Model/ProductosModel.php');
    require_once('View/ProductosView.php');

    class ProductosController{

        private $view;
        private $model;

        public function __construct(){
            $this->view = new ProductosView();
            $this->model = new ProductosModel();
        }

        public function MostrarProductos(){
            $productos = $this->model->getProductos();
            $this->view->mostrarProductos($productos);
        }

    }

?>