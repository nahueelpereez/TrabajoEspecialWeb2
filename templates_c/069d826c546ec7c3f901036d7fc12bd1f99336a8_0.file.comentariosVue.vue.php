<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-04 14:23:10
  from 'C:\xampp\htdocs\TrabajoEspecialPair\Templates\vue\comentariosVue.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fca383e82acc5_80244688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '069d826c546ec7c3f901036d7fc12bd1f99336a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TrabajoEspecialPair\\Templates\\vue\\comentariosVue.vue',
      1 => 1607088139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fca383e82acc5_80244688 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section id="template-vue-comentarios">
    
    <h3 class="text-white">Comentarios</h3>
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
                        <button v-on:click="fetchDeleteComment(comment.id_comentario)" type="button" class="btn btn-danger" id="botonBorrar">
                            eliminar
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        
</section>
<?php }
}
