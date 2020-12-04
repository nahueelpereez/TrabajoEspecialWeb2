<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 21:39:38
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\botonesC.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88a57acc7e76_25653285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '824e2d5903d2f11e4d146758107fa68dae009398' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\botonesC.tpl',
      1 => 1602790760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f88a57acc7e76_25653285 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="verItemCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" class="btn  btn-secondary text-black btnEditar">VER</a>
<a href="formEditarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" class="btn  btn-secondary text-black btnEditar">EDITAR</a>
<a href="eliminarCategoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" type="submit" class="btn  btn-danger text-black btnEliminar">ELIMINAR</a></li><?php }
}
