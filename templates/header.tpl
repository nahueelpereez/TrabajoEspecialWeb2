<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pair</title>
            <base href="{basehref}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/estilos.css">
            <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
        </head>
        <body>
            <header>
                <div>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a class="navbar-brand" href="inicio">PAIR</a>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="productos">PRODUCTOS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="categorias">CATEGORIAS</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="sobre-nosotros">SOBRE NOSOTROS</a>
                            </li>
                            {if $logged eq false}
                            <li class="nav-item active">
                                <a class="nav-link" href="registro">REGISTRATE</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="login">LOGUEATE</a>
                            </li>
                            {/if}
                                {if $logged}
                                {include 'Templates/agregar.tpl'}
                                {/if}
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>