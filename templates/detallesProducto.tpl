{include 'Templates/header.tpl'}

    <form action="obtenerProducto" method="GET">
        <div class="container-fluid">    
            <h5 class="display-4">{$producto->nombre}</h5>
            <p>Marca: {$producto->marca}</p>
            <p>Talle: {$producto->talle}</p>
            <p>Valor: {$producto->precio}$</p>
        </div>
    </form>


{include 'Templates/footer.tpl'}