{include 'Templates/header.tpl'}

<form action="nuevoProducto" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group text-white">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
            <div class="col">
                <div class="form-group text-white">
                    <h5>Marca</h5>
                    <input name="marca" type="text" class="form-group">
                </div>
            </div>
        </div>
        <div class="form-group text-white">
            <h5>Talle</h5>
            <input name="talle" type="text" class="form-control">
        </div>
        <div class="form-group text-white">
            <h5>Precio</h5>
            <input name="precio" type="number" class="form-control">
        </div>
        <h5 class="text-white">Categoria</h5>
        <select name="id_categoria">
                {foreach from=$productos item=producto}
                    <option value="{$producto->id_categoria}">{$producto->nombre}</option>
                {/foreach}
        </select>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>




{include 'Templates/footer.tpl'}