<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 22:12:22
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88ad26dae9c8_35341217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce6572684cd07b027f016140b46852e154a62b7f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\editarProducto.tpl',
      1 => 1602792739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f88ad26dae9c8_35341217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['titulo1']->value;?>
</h3>

<form action="editProduc/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group text-white">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
">
                </div>
            </div>
            <div class="col">
                <div class="form-group text-white">
                    <h5>Marca</h5>
                    <input name="marca" type="text" class="form-group" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
">
                </div>
            </div>
        </div>
        <div class="form-group text-white">
            <h5>Talle</h5>
            <input name="talle" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->talle;?>
">
        </div>
        <div class="form-group text-white">
            <h5>Precio</h5>
            <input name="precio" type="number" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
">
        </div>
        <h5 class="text-white">Categoria</h5>
        <select name="id_categoria">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    
        <button type="submit" class="btn btn-primary">Editar</button>
</form>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
