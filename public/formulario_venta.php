<?php
require __DIR__ . './../src/Entity/autoloader.php';

$security = new Security();
$loginMessage = $security->doLogin();

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/main_page.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Permanent+Marker&display=swap" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link rel="icon" type="image/svg" href="./img/Grotti-GTAV-Logo_Editado.svg">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
  <script src="../public/js/formulario_venta.js"></script>
  <script src="../public/js/cartera.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>Legendary Motorsport</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark transparent_black fixed-top">
    <div class="container">

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" href="indexSesion.php">Inicio
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" href="#">Servicios</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link effect-shine fuente_navbar" href="formulario_venta.php">Vende tu coche</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" data-toggle = "modal" href="#modal_contacto">Contáctanos</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto email">
                      <li class="nav-item">
                        <a class="nav-link fuente_navbar blanco"><span class="blanco email"><?= $security->getUserData(); ?></span>
                      </li>

                      <div>
                        <li class="nav-item">
                          <a class="nav-brand icon" data-toggle="modal" href="#money_modal"><img src="../public/img/plus.png" class="top"></img></a>
                        </li>
                      </div>
                      <li>
                        <a class="nav-link fuente_navbar blanco money" id="monederoWallet">

                  
                        </a>
                      </li>

                    </ul>
                  </div>
                </div>
              </nav>

  <!-- Page Content -->
  <div class="container">


    <div class="row">

      <div class="col-lg-3">

        <div class="shimmer">
          <h1 class=" my-4 title"><span class="titleWhite">L</span>egendary <span class="titleWhite">M</span>otorsport</h1>
        </div>


      </div>
    </div>


    <div class=" container col-lg-7 center margen_pequeno">
      <div class="form row centro down titleWhite fuente_navbar effect-underline bold">Formulario de Venta</div>
      <form method="post" id="formulario_venta">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label class="label">Marca</label>
            <select id="marca" name="marca" class="form-control">

            </select>
          </div>
          <div class="form-group col-md-6">
            <label class="label">Modelo</label>
            <select id="modelo" name="modelo" class="form-control">
              <option selected></option>
            </select>
          </div>
        </div>
        <div class="form-row center2">
          <div class="form-group col-md-3">
            <label class="label">Color</label>
            <select id="color" name="color" class="form-control">
              <option>Blanco</option>
              <option>Negro</option>
              <option>Rojo</option>
              <option>Plata</option>
              <option>Amarillo</option>
              <option>Marrón</option>
              <option>Azul</option>
              <option>Verde</option>
              <option>Rosa</option>
              <option>Morado</option>
              <option>Naranja</option>
              <option>Dorado</option>
              <option>Gris</option>
            </select>
          </div>
          <div class="form-group col-md-3">
            <label class="label">Km</label>
            <input type="number" name="km" class="form-control" id="km" placeholder="Km">
          </div>
          <div class="form-group col-md-3">
            <label class="label">Año</label>
            <input type="text" name="ano" class="form-control" maxlength="4" id="ano">
          </div>

          <div class="form-group col-md-3">
            <label class="label">Precio</label>
            <input type="number" name="precio" class="form-control" id="precio" placeholder="€">
          </div>
        </div>
        <div class="form-row center">
          <div class="form-group col">
            <label class="label">Fotos</label>
            <input type="file" name="fotos" class="form-control" id="fotos" multiple="multiple">
          </div>
        </div>
        <button type="submit" class="btn btn--red margen_pequeno">Enviar</button>
      </form>
    </div>
  </div>

  <div class="margen">
    <footer class="py-3 transparent_black">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Legendary Motorsports 2021</p>
      </div>

    </footer>
  </div>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>

  </script>

</body>

</html>