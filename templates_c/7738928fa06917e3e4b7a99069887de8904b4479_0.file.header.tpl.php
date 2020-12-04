<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 00:48:02
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc97932afa747_02320134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7738928fa06917e3e4b7a99069887de8904b4479' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\header.tpl',
      1 => 1607039281,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/agregar.tpl' => 1,
  ),
),false)) {
function content_5fc97932afa747_02320134 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pair</title>
            <base href="<?php echo basehref;?>
">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/estilos.css">
            <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"><?php echo '</script'; ?>
>
        </head>
        <body>
            <header>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="inicio">PAIR</a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="productos">PRODUCTOS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="categorias">CATEGORIAS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sobre-nosotros">SOBRE NOSOTROS</a>
                            </li>
                            <?php if ($_smarty_tpl->tpl_vars['logged']->value == false) {?>
                            <li class="nav-item active">
                                <a class="nav-link" href="registro">REGISTRATE</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="login">LOGUEATE</a>
                            </li>
                            <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
                                <?php $_smarty_tpl->_subTemplateRender('file:Templates/agregar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php }?>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header><?php }
}
