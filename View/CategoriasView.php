<?php
    require_once('libs/smarty/Smarty.class.php');
    
    class CategoriasView {

        private $smarty;

        public function __construct() {
            
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', basehref);
        }

        public function mostrarCategorias($categorias) {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('Templates/categorias.tpl');
        }

        public function mostrarCategoria($categoria) {
            $this->smarty->assign('categoria', $categoria);
    
            $this->smarty->display('Templates/detallesCategoria.tpl');
        }

        public function mostrarAgregarCategorias(){
            $this->smarty->display('Templates/agregarCategoria.tpl');
        }

        public function mostrarEditarCategorias($categoria){
            $this->smarty->assign('titulo1', 'Editar Categoria');
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->display('Templates/editarCategoria.tpl');
        }

        public function mostrarItemCategoria($categoria, $categorias){
            $this->smarty->assign('categoria', $categoria);
            $this->smarty->assign('categorias', $categorias);
            $this->smarty->display('Templates/formItemCategoria.tpl');
        }
    
        public function mostrarError($msgError) {
            echo "ERROR!";
            echo "{$msgError}";
        }


    }

?>