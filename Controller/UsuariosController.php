<?php

    require_once('Model/UsuariosModel.php');
    require_once('View/UsuariosView.php');
    require_once('HelperLogin.php');

    class UsuariosController{

        private $view;
        private $model;
        private $helperlogin;

        public function __construct(){
            $this->view = new UsuariosView();
            $this->model = new UsuariosModel();
            $this->helperlogin = new HelperLogin();
        }

        public function MostrarInicio(){
            $logged = $this->helperlogin->checkLoggedIn();
            $this->view->mostrarInicio($logged);
        }

        public function MostrarSobreNosotros(){
            $logged = $this->helperlogin->checkLoggedIn();
            $this->view->mostrarSobreNosotros($logged);
        }

        public function MostrarLogin(){
            $logged = $this->helperlogin->checkLoggedIn();
            $this->view->mostrarLogin($logged);
        }

        public function MostrarRegistro(){
            $logged = $this->helperlogin->checkLoggedIn();
            $this->view->mostrarRegistro($logged);
        }

        public function MostrarUsuarios(){
            if($this->helperlogin->isAdmin()){
                $logged = $this->helperlogin->checkLoggedIn();
                $usuarios = $this->model->getusuarios();
                $this->view->mostrarUsuarios($logged, $usuarios);
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }
        
        public function MostrarAgregar(){
            $logged = $this->helperlogin->checkLoggedIn();
            if($logged){
                session_start();
                if($_SESSION["rol"] == 1){
                    $this->view->mostrarAgregar($logged);
                }
                else {
                    header('Location: ' . LOGIN);
                }
            }
        }

        public function AsignarAdmin(){
            if($this->helperlogin->isAdmin()){
                $user = $_GET["usuariosSinPermisos"];
                $this->model->AsignarAdmin(1, $user);
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function QuitarAdmin(){
            if($this->helperlogin->isAdmin()){
                $user = $_GET["usuariosConPermisos"];
                $this->model->AsignarAdmin(0, $user);
            }
            else{
                header("Location: " . basehref . "inicio");
            }
        }

        public function EliminarUsuario(){
            if($this->helperlogin->isAdmin()){
                $usuario = $_GET["borrarUsuario"];
                $this->model->eliminarUsuario($usuario);
            }
            else{
                header("Location: " . basehref . "inicio");
            }

        }

        /*function checkLoggedSession() {
            if ($this->helperlogin->checkLoggedIn()) {
                if($_SESSION['ROLE'] == 0){
                    return 0;
                }
                else
                return 1;
            }
            else 2;
    
        }*/

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
                        $_SESSION['rol'] = $usuario->rol;
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


        public function NuevoUsuario(){
        
            $email = $_POST['email'];
            $contraseña = $_POST['contraseña'];
            $rol = 0;
            
            if (!empty($email)  && !empty($contraseña)) {
                $hash = password_hash($contraseña, PASSWORD_DEFAULT);
                $this->model->guardarUsuario($email, $hash, $rol);
                session_start();
                header('Location: ' . basehref);
            }
            else {
                echo("error");
            }
        }
    

        public function login($user){
            //Inicio sesion y loggeo al usuario.
            session_start();
            $_SESSION["id_usuario"] = $user->id_usuario;
            $_SESSION["email"] = $user->email;
            $_SESSION['rol'] = $user->rol;
    
        }

    
        public function logout() {
            session_start();
            session_destroy();
            header('Location: ' . LOGIN);
        }

    }

?>