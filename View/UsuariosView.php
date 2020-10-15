<?php
    require_once('libs/smarty/Smarty.class.php');
    
    class UsuariosView {

        private $smarty;

        public function __construct() {
            
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', basehref);
        }

        public function mostrarInicio() {

            $this->smarty->assign('PRODUCTOS', 'Todos los Productos');
            $this->smarty->assign('QUIENES_SOMOS', '¿Quienes Somos?');
            $this->smarty->assign('INICIA_SESION_O_REGISTRATE', 'Registrate o Inicia sesion');

            $this->smarty->display('Templates/inicio.tpl');
        }

        public function mostrarSobreNosotros() {

            $this->smarty->assign('titulo', 'Sobre Nosotros');
            $this->smarty->assign('descripcion', 'Pair se fundo en el año 2020...');

            $this->smarty->display('Templates/sobre-nosotros.tpl');
        }

        public function mostrarBotonesAdmin(){
            $this->smarty->display('Templates/botones.tpl');
            $this->smarty->display('Templates/agregar.tpl');
        }

        public function mostrarLogin($error = "") {

            $this->smarty->assign('titulo', 'Registrate');
            $this->smarty->assign('error', $error);

            $this->smarty->display('Templates/login.tpl');
        }

        public function mostrarAgregar($conectado){
            $this->smarty->assign('conectado', $conectado);
            $this->smarty->display('Templates/agregar.tpl');
        }

    }

?>