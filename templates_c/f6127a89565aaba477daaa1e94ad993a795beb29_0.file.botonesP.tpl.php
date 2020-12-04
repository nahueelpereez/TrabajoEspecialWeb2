<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 20:56:03
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\botonesP.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f889b43290fb6_92251337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6127a89565aaba477daaa1e94ad993a795beb29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\botonesP.tpl',
      1 => 1602788103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f889b43290fb6_92251337 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="formEditarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn  btn-secondary text-black btnEditar">EDITAR</a>
<a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" type="submit" class="btn  btn-danger text-black btnEliminar">ELIMINAR</a></li><?php }
}
