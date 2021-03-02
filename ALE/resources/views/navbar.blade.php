
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Ventas</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



</head>
<body>

<script>
var carro = [];
var cotizacion = [];

</script>



<nav class="navbar navbar-expand-sm bg-primary">
  <ul class="navbar-nav">

  <li class="nav-item">
    <div class="site-logo"> 
      <a href=""> 
        <img src="http://www.jdevoto.cl/web/wp-content/themes/storefront/img/logo.png" alt=""> 
      </a>
    </div>
  </li>
    <li class="nav-item">
      <a class="nav-link" href="welcome">Inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="productos">Productos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="marcas">Marcas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact">Contacto</a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="sucursales">Sucursales</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="quienessomos">Quienes Somos</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="cotizacion">Cotizacion</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="carro">Carro</a>
    </li>





    <li class="nav-item">
      <a class="nav-link" href="ayuda">Ayuda</a>
    </li>
    <li class="nav-item">     
    <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
        <div class="content">
    </li>
  </ul>
</nav>
<br>

</body>
</html>

<style>
.img_carrusel{
    height:385px !important;
    width:100%;
}
.navbar{
    margin-bottom: 0px !important;
}
h1{
    margin-top: 0px !important;    
}

a:link, a:visited { 
  color: white; 
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active { 
  color: grey; 
}
</style>


<script>
mostrar_carro();

function mostrar_carro(){
    alert('mostrando carro');
    console.log(carro);                
}

</script>

