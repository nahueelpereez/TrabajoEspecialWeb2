<?php
    require_once('libs/smarty/Smarty.class.php');
    
    class ProductosView {

        private $smarty;

        public function __construct() {
            
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', basehref);
        }

        public function mostrarProductos($productos, $logged) {

        $this->smarty->assign('logged', $logged);
        
        $this->smarty->assign('productos', $productos);

        $this->smarty->display('Templates/productos.tpl');
        }

        public function mostrarProducto($producto, $logged) {
            $this->smarty->assign('logged', $logged);

            $this->smarty->assign('producto', $producto);
    
            $this->smarty->display('Templates/detallesProducto.tpl');
        }

        public function mostrarAgregarProductos($productos, $logged){
            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('productos', $productos);
            $this->smarty->display('Templates/agregarProducto.tpl');
        }

        public function mostrarEditarProductos($producto, $productos, $logged){
            $this->smarty->assign('logged', $logged);
            $this->smarty->assign('titulo1', 'Editar Productos');
            $this->smarty->assign('producto', $producto);
            $this->smarty->assign('productos', $productos);
            $this->smarty->display('Templates/editarProducto.tpl');
        }
    
        public function mostrarError($msgError) {
            echo "ERROR!";
            echo "{$msgError}";
        }


    }

?>