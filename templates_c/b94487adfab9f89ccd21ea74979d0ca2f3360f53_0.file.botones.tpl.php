<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 03:19:37
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\botones.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f87a3a91a17a1_81991466',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94487adfab9f89ccd21ea74979d0ca2f3360f53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\botones.tpl',
      1 => 1602724745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f87a3a91a17a1_81991466 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="formEditarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn  btn-secondary text-black btnEditar">EDITAR</a>
<a href="eliminarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" type="submit" class="btn  btn-danger text-black btnEliminar">ELIMINAR</a></li><?php }
}
