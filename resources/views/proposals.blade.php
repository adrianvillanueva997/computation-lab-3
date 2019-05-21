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
    <link rel="stylesheet" href="../Footer-with-logo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.css">
    
    <!-- js scripts -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script src="{{ asset('js/javascript.js') }}"></script>
    
    <title>Service Page</title>
    
</head>
<body>

<!--Container (section Navbar)-->
@yield('barra_menu_principal')

<!--Container (section Home)-->
<div class="jumbotron text-center">
  <h1>Web Developement</h1> 
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

<!--Container (section PORTFOLIO GALLERYU)-->
<div class="container">

  <!-- Page Heading -->
  <h1 class="my-4">Proyectos</h1>

  <div class="row">
  @foreach($propuestas as $propuesta)
    <div class="col-lg-4 col-sm-6 mb-4">
      <div class="card h-100">
        <a href="individualServicePage.html"><img class="card-img-top" src="{{asset("images/$propuesta->image_path")}}" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
            <a href="/propuesta/{{$propuesta->id}}">{{$propuesta->name}}</a>
          </h4>
          <h6 class="card-text font-weight-bold">Descripcion</h6>
          <p class="card-text">{{$propuesta->description}}</p>
        </div>
      </div>
    </div>
  @endforeach
  <!-- /.row -->
  

  <!-- Pagination ¡ESTO HA SIDO COPIA/PEGA. REACER LA PAGINACION-->
  <ul class="pagination justify-content-center">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Anterior</span>
          </a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">1</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">2</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">3</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Siguiente</span>
          </a>
    </li>
  </ul>

</div>
<!-- /.container -->

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