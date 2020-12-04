
<?php
    require_once 'RouterClass.php';
    require_once 'api/ComentariosApiController.php';

    define("basehref", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');

    // instancia el router
    $r = new Router();
    
    $resource = $_GET["resource"];

    $method = $_SERVER["REQUEST_METHOD"];


    // arma la tabla de ruteo
    $r->addRoute('comentarios','GET','ComentariosApiController','obtenerComentarios');
    $r->addRoute('comentarios/:ID','GET','ComentariosApiController','obtenerComentario');
    $r->addRoute('delComentario/:ID', 'DELETE','ComentariosApiController','eliminarComentario');
    $r->addRoute('addComentarios','POST','ComentariosApiController','agregarComentario');

    // rutea
    $r->route($resource, $method);