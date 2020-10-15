{include 'Templates/header.tpl'}


<div class="container-fluid bg-info">
    <form action="verificar" method="POST" class="col-md-4 offset-md-4 mt-4">
        <h1 class="text-white display-4">{$titulo}</h1>

        <div class="form-group">
            <label class="text-white">Usuario (email)</label>
            <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label class="text-white">Password</label>
            <input type="password" name="contraseña" class="form-control" placeholder="Password">
        </div>

        {if $error}
        <div class="alert alert-danger" role="alert">
            {$error}
        </div>
        {/if}

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>


{include 'Templates/footer.tpl'}