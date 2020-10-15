{include 'Templates/header.tpl'}

<h3>{$titulo1}</h3>

<form action="editar-categorias/{$categoria->id_categoria}" method="POST">
<div class="row">
            <div class="col-9">
                <div class="form-group">
                    <h5>Nombre</h5>
                    <input name="nombre" type="text" class="form-control" value="{$categoria->nombre}">
                </div>
            </div>
        </div>
        <div class="form-group">
            <h5>Talle</h5>
            <input name="tipo" type="text" class="form-control" value="{$categoria->tipo}">
        </div>
        <div class="form-group">
        <button type="submit" class="btn  btn-secondary text-black btnEditar">EDITAR</button>
        </div>
</form>


{include 'Templates/footer.tpl'}
