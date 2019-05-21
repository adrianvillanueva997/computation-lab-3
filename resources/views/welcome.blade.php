@include('barramenu')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><!--shrink-to fit=no-->
    <!-- css links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
    
    <!-- js scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script src="{{ asset('js/javascript.js') }}"></script>
    
    <title>HomePage</title>
    
</head>
<body>

<!--Container (section Navbar)-->
@yield('barra_menu_principal')


<!--Container (section Home)-->
<div class="jumbotron text-center">
  <h1>Freelaunch</h1> 
  <p>El mejor portal freelancer de Espanha!</p>
  <div class="row">
      <div class="col-md-6 offset-md-4 ">
          <form class="form-inline center-block">
            <div class="input-group">
              <input type="search" class="form-control" size="50" placeholder="Search..." required>
              <div class="input-group-btn">
                <button type="button" class="btn btn-danger">
                    <i class="fa fa-search" style='font-size:20px'></i>
                </button>
              </div>
            </div>
  </form>
      </div>
  </div>
  
</div>

<!--Container (section Catalogo)-->
<div id="catalogo" class="container-fluid text-center">
  <h2>Catalogo</h2>
  <h4>Lo que ofrecemos</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4><a href="html/servicePage.html">Web Dev</a></h4>
      <p>Breve descripcion (posible)</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4>Mobile Dev</h4>
      <p>Breve descripcion (posible)</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4>Photoshop</h4>
      <p>Breve descripcion (posible)</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4>Logo</h4>
      <p>Breve descripcion (posible)</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4>Marketing</h4>
      <p>Breve descripcion (posible)</p>
    </div>
    <div class="col-sm-4">
      <span class="fa fa-css3" id="logo-small"></span>
      <h4>Blog</h4>
      <p>Breve descripcion (posible)</p>
    </div>
  </div>
</div>

<!--Container (section Populares)-->
<div id="populares" class="container-fluid text-center bg-grey">
  <h2>Mas Populares</h2><br>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/home-carousel-1.png" alt="Paris" width="400" height="300" class="img-thumbnail">
        <p><strong>Nombre del Proyecto</strong></p>
        <p>Nombre del autor</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/home-carousel-2.jpg" alt="New York" width="400" height="300" class="img-thumbnail">
        <p><strong>Nombre del Proyecto</strong></p>
        <p>Nombre del autor</p>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="assets/img/home-carousel-3.jpg" alt="San Francisco" width="400" height="300" class="img-thumbnail">
        <p><strong>Nombre del Proyecto</strong></p>
        <p>Nombre del autor</p>
      </div>
    </div>
  </div>
</div>

<!--Container (section Actividad)-->
<div class="container-fluid text-center">
  <h2>Actividad</h2><br>
  <div class="row">
    <div class="col ">
     <div class="thumbnail">
         <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
                <i class="fa fa-user-circle" style="font-size:300px"></i>
            </div>
            <div class="flip-card-back py-5">
              <h1><strong>Usuarios</strong></h1> 
              <h3>7398</h3>
            </div>
          </div>
        </div>
     </div>
    </div>
    <div class="col">
     <div class="thumbnail">
         <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
                <i class="fa fa-user " style="font-size:300px"></i>
            </div>
            <div class="flip-card-back py-5">
              <h1><strong>Freelancers</strong></h1> 
              <h3>347</h3>
            </div>
          </div>
        </div>
     </div>
    </div>
    <div class="col">
     <div class="thumbnail">
         <div class="flip-card">
          <div class="flip-card-inner">
            <div class="flip-card-front">
                <i class="fa fa-archive" style="font-size:300px"></i>
            </div>
            <div class="flip-card-back py-5">
              <h1><strong>Proyectos</strong></h1> 
              <h3>18054</h3>
            </div>
          </div>
        </div>
     </div>
    </div>
  </div>
</div>

<!--Container (section Contact)-->
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p> <span class="fa fa-css3" id="logo-xsmall"></span> Monte Pinar, ZP</p>
      <p> <span class="fa fa-css3" id="logo-xsmall"></span> +34 918903892</p>
      <p> <span class="fa fa-css3" id="logo-xsmall"></span> freelaunchweb@gmail.com</p>
    </div>
    <div class="col-sm-7">
      <div class="row" id="contacta">
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

<!--Imagen localizacion/mapa-->
<!--<div id="googleMap" style="width:100%;height:400px;"></div>-->
<img src="assets/img/map.jpg" class="img-responsive" style="width:100%">

</body>
</html>