{literal}

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
{/literal}