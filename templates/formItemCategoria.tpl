{include 'Templates/header.tpl'}

        <div class="container-fluid">    
            <h5 class="display-4">{$categoria->nombre}</h5>
            <p>Tipo: {$categoria->tipo}</p>
            {foreach from=$categorias item=categoria}
                <p value="{$categoria->id_producto}">Productos Asociados: {$categoria->nombre}</p>
            {/foreach}
        </div>


{include 'Templates/footer.tpl'}