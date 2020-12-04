{include 'Templates/header.tpl'}

        <div class="container-fluid">    
            <h5 class="display-4 text-white">{$categoria->nombre}</h5>
            <p class="text-white">Tipo: {$categoria->tipo}</p>
            {foreach from=$categorias item=categoria}
                <p class="text-white" value="{$categoria->id_producto}">Productos Asociados: {$categoria->nombre}</p>
            {/foreach}
        </div>


{include 'Templates/footer.tpl'}