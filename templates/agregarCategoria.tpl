{include 'Templates/header.tpl'}

<form action="nuevaCategoria" method="POST"  enctype="multipart/form-data">

        <div class="row">
            <div class="col-9">
                <div class="form-group text-white">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group text-white">
            <h5>Tipo</h5>
            <input name="tipo" type="text" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">Guardar</button>
</form>




{include 'Templates/footer.tpl'}