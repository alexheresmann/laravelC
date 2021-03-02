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
  <title>Marcas</title>
</head>

<body>
<H1>MARCAS</H1> 
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
                width: 50%;
                padding: 10px;
                color: white;
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
            <button class="btn" onclick="listView()">List</button>
            <button class="btn active" onclick="gridView()">Grid</button>
            </div>
            <br />

            <div class="row" style="margin:20px;">           
                @forelse($marcas as $marcasItem)
                <div class="column" style="background-color:rgb(220, 220, 220);">
                    <h2> {{ $marcasItem['nombre']}}</h2>
                </div>
                @empty
                <li> No Hay marcas </li>
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
                    item.style.width = "50%";
                });
                Array.from(document.querySelectorAll(".btn")).forEach((item, index) => {
                    if (index === 1) item.classList.add("active");
                    else item.classList.remove("active");
                });
            }
            </script>
        </body>
    </html>
</body>
@include('layouts/footer')
</HTML>