<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 17:54:56
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8870d080bd08_82952134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c32fa4439041583e032f7926df3a563f241360f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\productos.tpl',
      1 => 1602777294,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/botonesP.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8870d080bd08_82952134 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <ul class="list-group mt-4">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li class="list-group-item">
            <h3>Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre_categoria;?>
</h3>
            <h5><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h5>
            <p>Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</p>
            <p>Talle: <?php echo $_smarty_tpl->tpl_vars['producto']->value->talle;?>
</p>
            <p>Valor: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
$</p>
                <a href="detalle-producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" class="btn  btn-secondary text-black btnVer">VER</a>
                <?php $_smarty_tpl->_subTemplateRender('file:Templates/botonesP.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
