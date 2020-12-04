<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 16:25:11
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\agregarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca54d7b2bfe9_90453300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2a140b2ee72f43031cf1f2f87ee6ef3437f012' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\agregarProducto.tpl',
      1 => 1607095490,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fca54d7b2bfe9_90453300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="nuevoProducto" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group text-white">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group text-white">
                    <h5>Marca</h5>
                    <input name="marca" type="text" class="form-group">
                </div>
            </div>
        </div>
        <div class="form-group text-white">
            <h5>Talle</h5>
            <input name="talle" type="text" class="form-control">
        </div>
        <div class="form-group text-white">
            <h5>Precio</h5>
            <input name="precio" type="number" class="form-control">
        </div>
        <div class="form-group text-white">
            <h5 for="file_img">Imagen</h5>
            <input name="imagen" type="file" id="file_img" class="form-control">
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
    
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>




<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
