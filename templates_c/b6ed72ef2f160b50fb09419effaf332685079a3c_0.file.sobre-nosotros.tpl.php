<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 23:08:41
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\sobre-nosotros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f8768d9760906_62833495',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ed72ef2f160b50fb09419effaf332685079a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\sobre-nosotros.tpl',
      1 => 1602705712,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f8768d9760906_62833495 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="container-fluid bg-success">
        <h1 class="display-3 text-white"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <h2 class="text-white"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</h2>
        <p class="display-4 text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
