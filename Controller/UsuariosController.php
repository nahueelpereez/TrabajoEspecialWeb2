<?php

    require_once('Model/UsuariosModel.php');
    require_once('View/UsuariosView.php');

    class UsuariosController{

        private $view;
        private $model;

        public function __construct(){
            $this->view = new UsuariosView();
            $this->model = new UsuariosModel();
        }

        public function MostrarInicio(){
            $this->view->mostrarInicio();
        }

        public function MostrarSobreNosotros(){
            $this->view->mostrarSobreNosotros();
        }

    }

?>