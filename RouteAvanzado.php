<?php
    require_once('Controller/ProductosController.php');
    require_once('Controller/CategoriasController.php');
    require_once('Controller/UsuariosController.php');
    require_once('RouterClass.php');
    
    // CONSTANTES PARA RUTEO
    define("basehref", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');

    $r = new Router();
                                        //RUTAS//
    //Inicio
    $r->addRoute("inicio", "GET", "UsuariosController", "MostrarInicio");
    $r->addRoute("sobre-nosotros", "GET", "UsuariosController", "MostrarSobreNosotros");
    $r->addRoute("login", "GET", "UsuariosController", "MostrarLogin");

    //Productos
    $r->addRoute("productos", "GET", "ProductosController", "MostrarProductos");
    $r->addRoute("agregar-productos", "GET", "ProductosController", "MostrarAgregarProductos");
    $r->addRoute("formEditarProducto/:ID", "GET", "ProductosController", "MostrarEditarProductos");
    $r->addRoute("detalle-producto/:ID", "GET", "ProductosController", "obtenerProducto");
    $r->addRoute("eliminarProducto/:ID", "GET", "ProductosController", "eliminarProducto");
    $r->addRoute("nuevoProducto", "POST", "ProductosController", "AgregarProducto");
    $r->addRoute("formEditarProducto/editProduc/:ID", "POST", "ProductosController", "editarProducto");


    //Categorias
    $r->addRoute("categorias", "GET", "CategoriasController", "MostrarCategorias");
    $r->addRoute("agregar-categorias", "GET", "CategoriasController", "MostrarAgregarCategorias");
    $r->addRoute("formEditarCategoria/:ID", "GET", "CategoriasController", "MostrarEditarCategorias");
    $r->addRoute("eliminarCategoria/:ID", "GET", "CategoriasController", "eliminarCategoria");
    $r->addRoute("formEditarCategoria/editar-categorias/:ID", "POST", "CategoriasController", "EditarCategoria");
    $r->addRoute("nuevaCategoria", "POST", "CategoriasController", "AgregarCategoria");
    $r->addRoute("verItemCategoria/:ID", "GET", "CategoriasController", "VisualizarItemCategoria");

    //Login
    $r->addRoute("login", "POST", "UsuariosController", "login");
    $r->addRoute("verificar", "POST", "UsuariosController", "verificarUsuario");
    $r->addRoute("logout", "GET", "UsuariosController", "logout");

    //Ruta por defecto.
    $r->setDefaultRoute("UsuariosController", "MostrarInicio");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']);
?>