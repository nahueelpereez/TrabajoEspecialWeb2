<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 16:21:48
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\detallesProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca540c230b43_21808048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '963f6d13ef1e5ef6d66c5c51cc1da45594e02025' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\detallesProducto.tpl',
      1 => 1607095303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Templates/header.tpl' => 1,
    'file:Templates/vue/comentariosVue.vue' => 1,
    'file:Templates/footer.tpl' => 1,
  ),
),false)) {
function content_5fca540c230b43_21808048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:Templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <form action="obtenerProducto" method="GET">
        <div class="container-fluid">    
            <h5 class="display-4 text-white" ><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h5>
            <p class="text-white">Marca: <?php echo $_smarty_tpl->tpl_vars['producto']->value->marca;?>
</p>
            <p class="text-white">Talle: <?php echo $_smarty_tpl->tpl_vars['producto']->value->talle;?>
</p>
            <p class="text-white">Valor: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
$</p>
            <?php if ($_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
                <img src="imagenes/<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
">
            <?php }?>
        </div>
    </form>


    <?php $_smarty_tpl->_subTemplateRender('file:Templates/vue/comentariosVue.vue', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <section>

    <h3 class="text-white">Nuevo comentario</h3>
    <form action="" id="form-comentarios" method="POST">
        <input type="text" name="contenido" id="columna1" placeholder="contenido">
        <input type="number" name="puntuacion" id="columna2" placeholder="puntuacion" max="5">
        <button class="btn btn-primary" id="boton1" type="submit" >Agregar</button>
    </form>

</section>

<?php echo '<script'; ?>
 src="js/comentarios.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:Templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
