<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 03:50:30
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\usuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc9a3f65f9142_04832677',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '89d715a4c8201cd813a34c63d33c30a16f05207b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\usuarios.tpl',
      1 => 1607050227,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fc9a3f65f9142_04832677 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
    <h3 class="text-white">Cambiar privilegios a los usuarios</h3>  
        <form action="usuariosAdmin" method="GET">
            <label class="text-white" for="">Usuarios con permisos de administracion:  </label>
            <select name="usuariosConPermisos" id="" value="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['usuario']->value->rol == 1) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</option>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit" value="Quitar permisos">
        </form>
        <form action="usuariosNoAdmin" method="GET">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['usuario']->value->rol == 0) {?>
                    <label class="text-white" for="">Usuarios sin permisos de administracion:  </label>
                    <select name="usuariosSinPermisos" id="" value="">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                            <?php if ($_smarty_tpl->tpl_vars['usuario']->value->rol == 0) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</option>
                            <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="submit" value="Añadir permisos">    
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
        </form>
        <form action="eliminarUsuario" method="GET">
            <label class="text-white" for="">Usuarios ha eliminar:  </label>
            <select name="borrarUsuario" id="" value="">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usuarios']->value, 'usuario');
$_smarty_tpl->tpl_vars['usuario']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
$_smarty_tpl->tpl_vars['usuario']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->id_usuario;?>
"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->email;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit" value="Eliminar usuario">  
        </form>
</div>



<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
