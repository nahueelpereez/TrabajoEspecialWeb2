{include 'Templates/header.tpl'}

    <ul class="list-group mt-4">
        {foreach $productos as $producto}
            <li class="list-group-item">
            <h3>Categoria: {$producto->nombre_categoria}</h3>
            <h5>{$producto->nombre}</h5>
            <p>Marca: {$producto->marca}</p>
            <p>Talle: {$producto->talle}</p>
            <p>Valor: {$producto->precio}$</p>
                <a href="detalle-producto/{$producto->id_producto}" class="btn  btn-secondary text-black btnVer">VER</a>
                {include 'Templates/botonesP.tpl'}
        {/foreach}
    </ul>


{include 'Templates/footer.tpl'}