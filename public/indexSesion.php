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
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
  <link rel="icon" type="image/svg" href="./img/logo.svg">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="../public/js/autogenerar_anuncios.js"></script>
  <script src="../public/js/cartera.js"></script>
  <title>Legendary Motorsport</title>
</head>

<body id ="cos">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark transparent_black fixed-top">
    <div class="container">

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                        <a class="nav-link effect-shine fuente_navbar" href="#">Inicio
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" href="#">Servicios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" href="formulario_venta.php">Vende tu coche</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link effect-shine fuente_navbar" data-toggle = "modal" href="#modal_contacto">Contáctanos</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav ml-auto email">
                      <li class="nav-item">
                        <a class="nav-link fuente_navbar blanco"><span class="blanco email" id = "dinerito"><?= $security->getUserData(); ?></span>
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

        <h2 class="my-3 fuente_navbar">Filtrar</h2>
        <div class="list-group bordes ">
          <a href="#" class="list-group-item more_transparent_black">0 - 500$</a>
          <a href="#" class="list-group-item more_transparent_black">500 - 10000$</a>
          <a href="#" class="list-group-item more_transparent_black">10000$ - ∞</a>
        </div>

      </div>


      <!-- /.col-lg-3 -->

      <div class="col-lg-9" id="contenedor">

        <div id="carouselExampleIndicators" class="carousel slide my-4 bordes " data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>

          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="media/mercedes.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/gtr.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/lambo.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="media/about-4.jpeg" alt="Third slide">
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="col-lg-3">

        </div>

        <div class="col">
          <h1 class="my-4 title effect-underline fuente_navbar">Anuncios Activos</h1>
        </div>

        </div>
      <!-- /.row -->

      </div>
    <!-- /.col-lg-9 -->

     </div>
  <!-- /.row -->

  </div>
  <!-- /.container -->
  <!-- Button trigger modal -->

  <!-- Modal -->
  <!-- Button trigger modal -->


  <!-- Modal confirmacion compra -->
 


<!-- Modal recarga dinero -->
  <div class="modal fade" id="money_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header ">
          <h5 class="modal-title modal_precios" id="exampleModalCenterTitle">Depositar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" id="moneyForm">
            <div class="form-group">
              <label for="username">Cantidad a depositar</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-user"></i></span>
                </div>
                <input type="number" class="form-control" name="cantidad" id="cantidad" required = "">
              </div> <!-- input-group.// -->
            </div> <!-- form-group.// -->

            <div class="form-group">
              <label for="cardNumber">Número de tarjeta</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                </div>
                <input type="text" class="form-control" maxlength = "16">
              </div> <!-- input-group.// -->
            </div> <!-- form-group.// -->

            <div class="row">
              <div class="col-sm-8">
                <div class="form-group">
                  <label><span class="hidden-xs">Fecha de expiración</span> </label>
                  <div class="form-inline">
                    <select class="form-control" style="width:45%" required>
                      <option>MM</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                    </select>
                    <span style="width:10%; text-align: center"> / </span>
                    <select class="form-control" style="width:45%" required>
                      <option>YY</option>
                      <option>2021</option>
                      <option>2022</option>
                      <option>2023</option>
                      <option>2024</option>
                      <option>2025</option>
                      <option>2026</option>
                      <option>2027</option>
                      <option>2028</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="form-group">
                  <label data-toggle="tooltip" title="" data-original-title="3 digits code on back side of the card">CVV <i class="fa fa-question-circle"></i></label>
                  <input class="form-control" type="text" maxlength="3">
                </div> <!-- form-group.// -->
              </div>
            </div> <!-- row.// -->


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn--red--nohover " data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id="boton_pago" onclick="window.location.reload()">Pagar</button>
        </div>
        </form>
      </div>
    </div>
  </div>




  <!-- Modal contacto -->
           <div class="modal fade" id="modal_contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  
                  
                
                  <div class="modal-header">
                  <h5 class="modal-title modal_precios"> Contáctanos</h5><img src = "../public/img/logo.svg" class = "icono"></img>
                  </div>
                  <div class="card-body">
                      <form>
                          <div class="form-group">
                              <label for="name">Nombre</label>
                              <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" >
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  required>
                              <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu email , tus mensajes son privados.</small>
                          </div>
                          <div class="form-group">
                              <label for="message">Mensaje</label>
                              <textarea class="form-control" id="message" rows="6" required></textarea>
                          </div>
                          <div class="mx-auto">
                          <button type="submit" class="btn btn-primary text-right">Enviar</button>
                        </div>
                      </form>
                    </div>
                    </div>
                  </div>
                  </div>
              
           
     
                  
                   



  <!-- Footer -->
  <footer class="py-3 transparent_black">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Legendary Motorsports 2021</p>
    </div>

  </footer>


  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>

  </script>
</body>

</html>