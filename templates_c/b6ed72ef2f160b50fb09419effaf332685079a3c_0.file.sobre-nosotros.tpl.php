<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 01:41:44
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\sobre-nosotros.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f84e9b8c8d9e4_40317072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ed72ef2f160b50fb09419effaf332685079a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\sobre-nosotros.tpl',
      1 => 1602546102,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5f84e9b8c8d9e4_40317072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h1 class="display-3 text-white"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
<h2 class="text-white"><?php echo $_smarty_tpl->tpl_vars['descripcion']->value;?>
</h2>



<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
