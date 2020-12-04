<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 14:58:43
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\formItemCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca4093e92dc8_69545186',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46e59085a331384035a2d014a1495f8b62d4e4be' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\formItemCategoria.tpl',
      1 => 1607090319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fca4093e92dc8_69545186 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div class="container-fluid">    
            <h5 class="display-4 text-white"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h5>
            <p class="text-white">Tipo: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->tipo;?>
</p>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                <p class="text-white" value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_producto;?>
">Productos Asociados: <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>


<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
