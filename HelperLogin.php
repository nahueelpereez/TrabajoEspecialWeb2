<?php

Class HelperLogin {

    public function __construct(){
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function checkLoggedIn(){
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

    public function isAdmin(){
        if($_SESSION['rol'] == 1){
            return true;
        }
        else{
            header('Location: '. basehref . 'inicio');
        }

    }

    //redireccion cuando no es admin a home
    
    public function getIdUsuario(){
		if(!isset($_SESSION["email"])){
            return $_SESSION["ID"];
        }
	}


}