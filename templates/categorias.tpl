{include 'Templates/header.tpl'}

    <ul class="list-group mt-4">
        {foreach $categorias as $categoria}
            <li class="list-group-item">
            <h5>{$categoria->nombre}</h5>
            <p>Tipo: {$categoria->tipo}</p>
                {include 'Templates/botonesC.tpl'}
        {/foreach}
    </ul>


{include 'Templates/footer.tpl'}