@extends('layouts.app')


@section('content')



<html>

<body>

<div class="container">
  <h2>Administrar Sitio</h2>  
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Carrusel de imagenes</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">

        <div class="panel-body">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <form runat="server">
        <input type='file' id="imgInp" />
        <img id="blah" src="#" alt="your image" />
        </form>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Productos</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Información sobre el producto</title>
</head>

<body>

<h3>Información sobre el producto</h3>

<form name="miform" method="post" action="http://www.eui.upm.es/~salonso/curso/procesa.php">

<fieldset>
  <legend><strong>Datos básicos</strong></legend>

  <label for="nombre">Nombre</label> <br>  
  <input name="nombre" id="nombre" size="50" maxlength="250" type="text"><br><br>

  <label for="descripcion">Descripción</label> <br>  
  <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea><br><br>

  Foto <input name="foto" type="file"><br><br>  
  <input name="contador" value="si" type="checkbox"> Añadir contador de visitas
</fieldset>

<br>
<fieldset>
  <legend><strong>Datos económicos</strong></legend>  
  <label for="precio">Precio</label> 
  <input size="5" id="precio" name="precio" type="text"> $
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <label for="impuestos">Impuestos</label> 
  <select name="impuestos">
    <option value="19">19%</option>   
  </select>  
  <br><br>
  <label>Promoción</label> <br>
  <input name="promocion" value="ninguno" checked="checked" type="radio"> Ninguno <br>
  <input name="promocion" value="portes" type="radio"> Transporte gratuito <br>
  <input name="promocion" value="descuento" type="radio"> Descuento 5%
</fieldset>
</form>

</body>
</html>





        
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Categorias</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Información sobre la categoria</title>
</head>

<body>

<h3>Información sobre la categoria</h3>

<form name="miform" method="post" action="http://www.eui.upm.es/~salonso/curso/procesa.php">

<fieldset>
  <legend><strong>Datos básicos</strong></legend>

  <label for="nombre">Nombre</label> <br>  
  <input name="nombre" id="nombre" size="50" maxlength="250" type="text"><br><br>

  <label for="descripcion">Descripción</label> <br>  
  <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea><br><br>

  Foto <input name="foto" type="file"><br><br>  
  <input name="contador" value="si" type="checkbox"> Añadir contador de visitas
</fieldset>

<br>

</form>


</body>
</html>

        </div>
      </div>
    </div>


    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Marcas</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
        
        <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Información sobre la marca</title>
</head>

<body>

<h3>Información sobre la marca</h3>

<form name="miform" method="post" action="http://www.eui.upm.es/~salonso/curso/procesa.php">

<fieldset>
  <legend><strong>Datos básicos</strong></legend>

  <label for="nombre">Nombre</label> <br>  
  <input name="nombre" id="nombre" size="50" maxlength="250" type="text"><br><br>

  <label for="descripcion">Descripción</label> <br>  
  <textarea name="descripcion" id="descripcion" cols="40" rows="5"></textarea><br><br>

  Foto <input name="foto" type="file"><br><br>  
  <input name="contador" value="si" type="checkbox"> Añadir contador de visitas
</fieldset>

<br>

</form>


</body>
</html>

        </div>
      </div>
    </div>




  </div> 
</div>
    
</body>
</html>




<script>
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>



















@endsection

