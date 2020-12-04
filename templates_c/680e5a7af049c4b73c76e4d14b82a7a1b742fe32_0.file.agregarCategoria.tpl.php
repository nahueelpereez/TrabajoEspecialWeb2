<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 17:58:17
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\agregarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f887199eb1c80_87720908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680e5a7af049c4b73c76e4d14b82a7a1b742fe32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\agregarCategoria.tpl',
      1 => 1602777494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f887199eb1c80_87720908 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="nuevaCategoria" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group text-white">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group text-white">
            <h5>Tipo</h5>
            <input name="tipo" type="text" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>




<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
