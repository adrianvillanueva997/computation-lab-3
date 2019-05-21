@include('barramenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--shrink-to fit=no-->
    <!-- css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stylesheet.css">
    <link rel="stylesheet" href="../Footer-with-logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
    
    <!-- js scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script src="javascript.js"></script>
    
    <title>Individual Page</title>
    
</head>
<body>

<!--Container (section Navbar)-->
@yield('barra_menu_principal')

<!-- Home -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
<!--        <h1 class="my-3">Perfil</h1>-->
        <div class="list-group">
        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            <h3>Perfil</h3>
          </div>
          <div class="card-body">
            <div class="col-sm-12 text-center">
              <span class="fa fa-css3" id="logo-small"></span>
              <h4 class="text-center"><a href="#">#Username</a></h4>
              <p class="text-center">Breve descripcion (posible)</p>
            </div>
            <hr>
            <p class="font-weight-bold">Informacion Personal</p>
            <p>Nombre: <span>Nombre Freelancer</span></p>
            <p>Edad: <span>69</span></p>
            <p>Origen: <span>Aleman</span></p>
            <p>Ocupacion: <span>NiNi</span></p>
            <hr>
            <p class="font-weight-bold">Habilidades</p>
            <p>PHP, Laravel, MySQL, JavaScript, Angular, React</p>
<!--
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
-->
          </div>
        </div>
        <!-- /.card -->
        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="http://placehold.it/900x400" alt="">
          <div class="card-body">
            <h3 class="card-title">Titulo del Proyecto</h3>
            <p class="font-weight-bold">Habilidades que abarca el usuario</p>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente dicta fugit fugiat hic aliquam itaque facere, soluta. Totam id dolores, sint aperiam sequi pariatur praesentium animi perspiciatis molestias iure, ducimus!</p>
            <h4>$24.99</h4>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header font-weight-bold">
            Sobre el Proyecto
          </div>
          <div class="card-body">
           <p class="font-italic">Descripcion</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Publicado por Anonimo el 04/05/19</small>
            <hr>
            <p class="font-italic">Detalles del pedido</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis et enim aperiam inventore, similique necessitatibus neque non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi mollitia, necessitatibus quae sint natus.</p>
            <small class="text-muted">Publicado por Anonimo el 04/05/19</small>
<!--
            <hr>
            <a href="#" class="btn btn-success">Leave a Review</a>
-->
          </div>
        </div>
        <!-- /.card -->
        
        <div class="card card-outline-secondary my-4">
            <div class="card-header font-weight-bold">
                Contactar
            </div>
            <div class="card-body">
                <div id="contact" class="container-fluid">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-6 form-group">
                          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
                        </div>
                        <div class="col-sm-6 form-group">
                          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                        </div>
                      </div>
                      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
                      <div class="row">
                        <div class="col-sm-12 form-group">
                          <button class="btn btn-default pull-right" type="submit" id="color">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->
<!-- /Home -->
  
  <!--Container (section FOOTER)-->
<footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="../index.html">Home</a></li>
                        <li><a href="#">Entrar</a></li>
                        <li><a href="#">Registrarse</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Contactar</a></li>
                        <li><a href="#">Testimonios</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 info">
                    <h5>Informacion</h5>
                    <p> Lorem ipsum dolor amet, consectetur adipiscing elit. Etiam consectetur aliquet aliquet. Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                </div>
            </div>
        </div>
        <div class="second-bar">
           <div class="container">
                <h2 class="logo"><a href="../index.html"> LOGO </a></h2>
                <div class="social-icons">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>