<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 01:35:07
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84e82bb61c63_01154789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c32fa4439041583e032f7926df3a563f241360f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\productos.tpl',
      1 => 1602545495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f84e82bb61c63_01154789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<ul class="list-group mt-4">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'prodcuto');
$_smarty_tpl->tpl_vars['prodcuto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['prodcuto']->value) {
$_smarty_tpl->tpl_vars['prodcuto']->do_else = false;
?>
        <li class="list-group-item">
        <h5><?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->nombre;?>
</h5>
        <h3><?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->id_categoria;?>
</h3>
        <p>Marca: <?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->marca;?>
</p>
        <p>Talle: <?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->talle;?>
</p>
        <p>Valor: <?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->precio;?>
$</p>
        <?php if ((isset($_SESSION['id_usuario']))) {?>
            <a href="formEditarNoticia/<?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->id_producto;?>
" class="btn  btn-secondary text-black btnEditar">EDITAR</a>
            <a href="noticias/<?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->id_prodcuto;?>
" class="btn  btn-secondary text-black btnVer">VER</a>
            <a href="eliminarNoticia/<?php echo $_smarty_tpl->tpl_vars['prodcuto']->value->id_prodcuto;?>
" type="submit" class="btn  btn-danger text-black btnEliminar">ELIMINAR</a></li>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
