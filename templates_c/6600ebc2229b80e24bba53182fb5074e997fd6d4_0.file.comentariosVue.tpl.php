<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-03 23:08:28
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\vue\comentariosVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc961dc49ad50_93032878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6600ebc2229b80e24bba53182fb5074e997fd6d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\vue\\comentariosVue.tpl',
      1 => 1607033287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc961dc49ad50_93032878 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="template-vue-comentarios">
    
    <h3>Comentarios</h3>
        <table class="table table-hover table-primary">
            <thead>
                <tr>
                    <th scope="col">Usuario</th>
                    <th scope="col">Comentario</th>
                    <th scope="col">Puntuacion</th>
                </tr>
            </thead>
            <tbody v-for="comment in comments">
                <tr>
                    <th scope="row" name="usuario">{{ comment.id_usuario }}</th>
                    <td name="contenido">{{ comment.contenido }}</td>
                    <td name="puntuacion">{{ comment.puntuacion }}</td>
                    <td>
                        <button type="submit" class="btn btn-danger" id="botonBorrar">
                            eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        
</section>
<?php }
}
