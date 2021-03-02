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
        </style>
    </head>
    <body>


<HTML>
@include('navbar')
<head> 

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Productos</title>
</head>
<body>
<H1>Productos</H1> 
    <!DOCTYPE html>
        <html>
            <head>
            <style>
            * {
                box-sizing: border-box;
            }
            body {
                font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            }
            /* Create two equal columns that floats next to each other */
            .column {
                float: left;
                width: 30%;
                padding: 10px;
                color: black;
            }
            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }
            /* Style the buttons */
            .btn {
                border: none;
                outline: none;
                padding: 12px 16px;
                background-color: #f1f1f1;
                cursor: pointer;
            }
            .btn:hover {
                background-color: #ddd;
            }
            .btn.active {
                background-color: #666;
                color: white;
            }
            </style>
            </head>
            <body>
            <div id="btnContainer">
            <button class="btn bg-danger" onclick="listView()">Lista</button>
            <button class="btn active bg-info" onclick="gridView()">Grilla</button>
            </div>
            <br />
            <div class="row" style="margin:20px;">           
                @forelse($productos as $productosItem)
               <?PHP// var_dump($productosItem); ?>
                <div class="column" style="background-color:rgb(200, 220, 240);  border: 1px solid black; margin:5px">                    
                    <img width="100%" height="200" src="{{ $productosItem['img']}}" >
                    <h2> {{ $productosItem['nombre']}}</h2>
                    <label>Descripcion:</label> <a>{{ $productosItem['descripcion']}}</a>
                    <BR>
                    <label>Mas Informacion</label>               
                    <div class="container">  
                        <p>
                            <button type="button" class="btn  bg-success text-white"   onclick="addcarro('{{$productosItem['nombre']}}', '{{$productosItem['descripcion']}}', '{{$productosItem['img']}}');">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                            </button>
                        </p> 
                    </div>  
                </div>
                @empty
                <li> No Hay Productos </li>
                @endforelse()
            </div>
            <script>
            var elements = document.querySelectorAll(".column");
            function listView() {
                Array.from(elements).forEach(item => {
                    item.style.width = "100%";
                });
                Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
                    if (index === 0) item.classList.add("active");
                    else item.classList.remove("active");
                });
            }
            function gridView() {
                Array.from(elements).forEach(item => {
                    item.style.width = "30%";
                });
                Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
                    if (index === 1) item.classList.add("active");
                    else item.classList.remove("active");
                });
            }

            function cotizar(nombre, descripcion ){
                alert('Cotizacion: '+nombre);
                cotizacion.push(nombre,descripcion);

            }  
            
            function addcarro(nombre, descripcion, img){
              //  alert('carro: '+ nombre);
                var producto = {
                    'nombre': nombre,
                    'descripcion':descripcion, 
                    'img': img
                }
                carro.push(producto);
                console.log(carro);
            }

            function constructor_carro(){

            }


            function mostrar_carro(){

            }




            </script>
        </body>
    </html>   
</body>
@include('layouts/footer')
</HTML>