{include 'Templates/header.tpl'}

    <form action="obtenerProducto" method="GET">
        <div class="container-fluid">    
            <h5 class="display-4 text-white" >{$producto->nombre}</h5>
            <p class="text-white">Marca: {$producto->marca}</p>
            <p class="text-white">Talle: {$producto->talle}</p>
            <p class="text-white">Valor: {$producto->precio}$</p>
            {if $producto->imagen}
                <img src="imagenes/{$producto->imagen}">
            {/if}
        </div>
    </form>


    {include 'Templates/vue/comentariosVue.vue'}

    <section>

    <h3 class="text-white">Nuevo comentario</h3>
    <form action="" id="form-comentarios" method="POST">
        <input type="text" name="contenido" id="columna1" placeholder="contenido">
        <input type="number" name="puntuacion" id="columna2" placeholder="puntuacion" max="5">
        <button class="btn btn-primary" id="boton1" type="submit" >Agregar</button>
    </form>

</section>

<script src="js/comentarios.js"></script>

{include 'Templates/footer.tpl'}