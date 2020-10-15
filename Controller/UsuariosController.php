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

        public function MostrarLogin(){
            $this->view->mostrarLogin();
        }
        
        public function MostrarAgregar(){
            $conectado = $this->checkLoggedIn();
            if($conectado){
                session_start();
                if(isset($_SESSION["email"])){
                    $this->view->mostrarAgregar($conectado);
                }
                else {
                    header('Location: ' . LOGIN);
                    die();
                }
            }
        }

        public function checkLoggedIn(){
            session_start();
            if(!isset($_SESSION["email"])){
                return false;
            }else{
                if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { 
                    return false;
                }
                $_SESSION['LAST_ACTIVITY'] = time();
                return true;
            }
        }

        public function MostrarBotonesAdmin(){
            $this->checkLoggedIn();
            $this->view->mostrarBotonesAdmin();
        }

        public function verificarUsuario(){
            $email = $_POST['email'];
            $contra = $_POST['contraseña'];
            
            if(isset($email)){
                $usuario = $this->model->getByUsername($email);

                if (isset($usuario) && $usuario){
                        
                    if(password_verify($contra, $usuario->contraseña)) {
                        session_start();
                        $_SESSION["id_usuario"] = $usuario->id_usuario;
                        $_SESSION["email"] = $usuario->email;
                        header('Location: '. basehref . "inicio");
                    } 
                    else {
                        $this->view->mostrarLogin("Login incorrecto");
                    }
                }
                else{
                    $this->view->mostrarLogin("Usuario no existe");
                }
            }
        }

    
        public function logout() {
            session_start();
            session_destroy();
            header('Location: ' . LOGIN);
        }

    }

?>