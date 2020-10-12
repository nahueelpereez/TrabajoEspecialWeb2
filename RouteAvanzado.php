<?php
    require_once('Controller/ProductosController.php');
    require_once('Controller/CategoriasController.php');
    require_once('Controller/UsuariosController.php');
    require_once('RouterClass.php');
    
    // CONSTANTES PARA RUTEO
    define("basehref", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", basehref . 'login');
   // define("VER", basehref . 'ver');

    $r = new Router();

    // rutas
    $r->addRoute("inicio", "GET", "UsuariosController", "MostrarInicio");
    $r->addRoute("sobre-nosotros", "GET", "UsuariosController", "MostrarSobreNosotros");
    $r->addRoute("productos", "GET", "ProductosController", "MostrarProductos");

    $r->addRoute("login", "GET", "LoginController", "showLogin");
    $r->addRoute("verificar", "POST", "LoginController", "verificarUsuario");
    $r->addRoute("logout", "GET", "LoginController", "logout");

    //Ruta por defecto.
    $r->setDefaultRoute("UsuariosController", "MostrarInicio");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>