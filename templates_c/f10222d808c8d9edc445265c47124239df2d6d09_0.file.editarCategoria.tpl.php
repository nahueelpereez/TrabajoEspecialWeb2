<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 20:07:36
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f888fe8bdbc15_29399686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f10222d808c8d9edc445265c47124239df2d6d09' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\editarCategoria.tpl',
      1 => 1602778666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f888fe8bdbc15_29399686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h3><?php echo $_smarty_tpl->tpl_vars['titulo1']->value;?>
</h3>

<form action="editar-categorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
" method="POST">
<div class="row">
            <div class="col-9">
                <div class="form-group">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
">
                </div>
            </div>
        </div>
        <div class="form-group">
            <h5>Talle</h5>
            <input name="tipo" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
">
        </div>
        <div class="form-group">
        <button type="submit" class="btn  btn-secondary text-black btnEditar">EDITAR</button>
        </div>
</form>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
