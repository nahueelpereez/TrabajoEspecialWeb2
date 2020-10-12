<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 01:28:59
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84e6bbbb2b91_35743632',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7706083a8ea7205e9c5c801b70a9795552054f8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\inicio.tpl',
      1 => 1602545337,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f84e6bbbb2b91_35743632 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="container-fluid text-center">
  <div class="row">
    <a href="productos" class="col-12 bg-danger py-5 text-dark">
    <div>
      <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['PRODUCTOS']->value;?>
</h1>
    </div>
    </a>
    <a href="sobre-nosotros" class="col-6 bg-success py-5 text-dark">
    <div>
      <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['QUIENES_SOMOS']->value;?>
</h1>
    </div>
    </a>
    <a href="login" class="col-6 bg-primary py-5 text-dark">
    <div>
      <h1 class="display-3"><?php echo $_smarty_tpl->tpl_vars['INICIA_SESION_O_REGISTRATE']->value;?>
</h1>
    </div>
    </a>
  </div>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
