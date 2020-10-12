{include 'Templates/header.tpl'}


<ul class="list-group mt-4">
    {foreach $productos as $prodcuto}
        <li class="list-group-item">
        <h5>{$prodcuto->nombre}</h5>
        <h3>{$prodcuto->id_categoria}</h3>
        <p>Marca: {$prodcuto->marca}</p>
        <p>Talle: {$prodcuto->talle}</p>
        <p>Valor: {$prodcuto->precio}$</p>
        {if isset($smarty.session.id_usuario)}
            <a href="formEditarProducto/{$prodcuto->id_producto}" class="btn  btn-secondary text-black btnEditar">EDITAR</a>
            <a href="prodcutos/{$prodcuto->id_prodcuto}" class="btn  btn-secondary text-black btnVer">VER</a>
            <a href="eliminarProducto/{$prodcuto->id_prodcuto}" type="submit" class="btn  btn-danger text-black btnEliminar">ELIMINAR</a></li>
        {/if}
    {/foreach}
</ul>


{include 'Templates/footer.tpl'}