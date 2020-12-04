<?php
    require_once('libs/smarty/Smarty.class.php');
    
    class UsuariosView {

        private $smarty;

        public function __construct() {
            
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', basehref);
        }

        public function mostrarInicio($logged) {

            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('PRODUCTOS', 'Todos los Productos');
            $this->smarty->assign('QUIENES_SOMOS', '¿Quienes Somos?');
            $this->smarty->assign('INICIA_SESION_O_REGISTRATE', 'Registrate o Inicia sesion');

            $this->smarty->display('Templates/inicio.tpl');
        }

        public function mostrarSobreNosotros($logged) {

            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('titulo', 'Sobre Nosotros');
            $this->smarty->assign('descripcion', 'Pair se fundo en el año 2020...');

            $this->smarty->display('Templates/sobre-nosotros.tpl');
        }

        public function mostrarLogin($logged, $error = "") {

            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('titulo', 'Logueate');
            $this->smarty->assign('error', $error);

            $this->smarty->display('Templates/login.tpl');
        }

        public function mostrarRegistro($logged, $error = "") {

            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('titulo', 'Registrate');
            $this->smarty->assign('error', $error);

            $this->smarty->display('Templates/register.tpl');
        }

        public function mostrarAgregar($logged){
            $this->smarty->assign('logged', $logged);
            $this->smarty->display('Templates/agregar.tpl');
        }

        public function mostrarUsuarios($logged, $usuarios){
            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('usuarios',$usuarios);
            $this->smarty->display('Templates/usuarios.tpl');

        }

    }

?>