{include 'Templates/header.tpl'}

<div class="container-fluid text-center">
  <div class="row">
    <a href="productos" class="col-12 bg-danger py-5 text-dark">
    <div>
      <h1 class="display-3">{$PRODUCTOS}</h1>
    </div>
    </a>
    <a href="sobre-nosotros" class="col-6 bg-success py-5 text-dark">
    <div>
      <h1 class="display-3">{$QUIENES_SOMOS}</h1>
    </div>
    </a>
    <a href="login" class="col-6 bg-primary py-5 text-dark">
    <div>
      <h1 class="display-3">{$INICIA_SESION_O_REGISTRATE}</h1>
    </div>
    </a>
  </div>
</div>

{include 'Templates/footer.tpl'}