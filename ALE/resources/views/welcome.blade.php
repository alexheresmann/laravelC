<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sisventas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .row {
                margin-right: 0px !important;
                margin-left: 0px !important;
            }

        </style>
    </head>
    <body>
    <!--
        <div class="flex-center position-ref full-height">
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
    -->
<!--contenido --->
<HTML>
@include('navbar')
<head> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Home</title>
</head>
<body>
 <H1>Inicio</H1>
            <div class="tab-content" style="margin-right: 0npx;"> 
                <div class="">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="">
                                <div class="panel-body" style="padding-top: 0px;padding-right: 0px;padding-left: 0px; padding-bottom: 0px;">
                                    <div class="well" style="padding-left: 0px; padding-right: 0px; padding-top: 0px; padding-bottom: 0px;">
                                        <h3>BUSCAR</h3> 
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#home" data-toggle="tab">Producto</a></li>
                                        </ul>
                                        <div id="myTabContent" class="tab-content">
                                            <div class="tab-pane active in" id="home">
                                                <form id="tab"> 
                                                    <div class="col-md-12" style="margin-bottom: 0px;">
                                                        <label> </label>
                                                        <div class="form-group has-search">
                                                            <span class="fa fa-search form-control-feedback"></span>
                                                            <input type="text" class="form-control" placeholder="Buscar">
                                                        </div> 
                                                    </div>                                              
                                                    <div class="btn-group btn-group-sm">
                                                        <input  data-toggle="tab" href="#div_productos" id="btn_buscar" type="button" onclick="buscar_neumatico();" value ="Buscar" class="btn btn-xs btn-primary  pull-right"> 
                                                    </div>
                                                </form>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>						
                        <div class="col-md-9" style="padding-left: 0px;  padding-right: 0px;">
                           <div class="carousel-holder" style="">                              
                                    <div  id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>                                         
                                        </ol>					
                                        <div class="carousel-inner" >
                                            <div class="item active">                             
                                                <img class="img_carrusel"  src="//localhost/ALE/public/img/nuevos_productos.png" alt=""/>
                                            </div> 
                                            <div class="item">
                                                <img class="img_carrusel" src="//localhost/ALE/public/img/marcadores.png" alt=""/>
                                            </div>
                                            <div class="item">                                               
                                                    <img  class="img_carrusel" src="//localhost/ALE/public/img/argiles.png" alt=""/>
                                            </div>
                                            <div class="item">
                                                <img class="img_carrusel" src="//localhost/ALE/public/img/divertirse.png" alt=""/>
                                            </div>
                                            <div class="item">
                                                <img class="img_carrusel" src="//localhost/ALE/public/img/hand.png" alt=""/>
                                            </div>         											
                                        </div>			
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>                                
                            </div>

                            <!--                            
							<br> 
                            <br>
                            <h2>OFERTAS</h2> 
                            <br> <br>
                            <div class="row">
                                <div class="col-sm-4 col-sm-4 col-md-4">
                                    <div class="thumbnail">                                      
                                        <img src="//localhost/ALE/public/img/neumaticos principal 320x150 .png" alt=""/>
                                        <div class="caption">
                                            <h4 class="pull-right">$44.990</h4>
                                            <h4><a data-toggle="tab" href="#div_productos" onclick="oferta_neumatico();">Neumaticos</a></h4>
                                             <p>Agrega productos al carro y realice su compra.</p>
                                        </div>
                                        <div class="ratings">
                                            <p class="pull-right">15 vistos</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4">
                                    <div class="thumbnail">
                                        <!--<img src="http://placehold.it/320x150" alt="">-->
                                       <!--   <img src="//localhost/ALE/public/img/imgres.jpg" alt=""/>
                                        <div class="caption">
                                            <h4 class="pull-right">$64.990</h4>                                           
											<h4><a data-toggle="tab" href="#div_productos" onclick="oferta_llantas();">Llantas</a></h4>
                                            <p>Consulte catalogo de Llantas en oferta. </p>
                                        </div>
                                        <div class="ratings">
                                            <p class="pull-right">12 vistos</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-sm-4 col-md-4 ">
                                    <div class="thumbnail">                                      
                                        <img src="//localhost/ALE/public/img/bunner_3.jpg" alt=""/>
                                        <div class="caption">
                                            <h4 class="pull-right">$24.990</h4>
                                            <h4><a data-toggle="tab" href="#div_productos" onclick="oferta_bateria();">Baterias</a></h4>
                                            <p>Ingresa y ve más variedades y detalles</p>
                                        </div>
                                        <div class="ratings">
                                            <p class="pull-right">31 vistos</p>
                                            <p>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div> -->  
                        </div>
                    </div>
                </div>
            </div> 
            <!--/.container-->     
            

         
</body>
@include('layouts/footer')

</HTML>

<!--contenido --->

            </div>
        </div>
    </body>
</html>
