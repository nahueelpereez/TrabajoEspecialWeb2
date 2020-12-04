<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-15 18:30:38
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f88792e858ca7_04049380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea789bf6a25533c1b6c41961378d73171f4a0e22' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\login.tpl',
      1 => 1602779433,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f88792e858ca7_04049380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div class="container-fluid bg-info">
    <form action="verificar" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1 class="text-white display-4"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>

        <div class="form-group">
            <label class="text-white">Usuario (email)</label>
            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label class="text-white">Password</label>
            <input type="password" name="contraseña" class="form-control" placeholder="Password">
        </div>

        <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

        </div>
        <?php }?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
