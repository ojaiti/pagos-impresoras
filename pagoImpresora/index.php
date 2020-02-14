<?php 
  include 'consultas.php';
  $impresoras = getPeriodo()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
    <title>Pago de impresoras</title>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="config.php">Configuracion <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
   
  </div>
</nav>
<div class="container">

    <h2 class="center">Pago de impresoras</h2>
    <div class="<?php if(isset($_GET['error'])){echo $_GET['error'];}else{echo 'ocultar';}?>">
      
    </div>
    
    <h4>Escribe los contadores</h4>
    <form action="files.php" id="formulario" method="post" enctype="multipart/form-data" name="inscripcion">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Impresoras</label>
        <?php foreach($impresoras as $key => $impresora):?>
          <label for="<?php echo $impresora['ip']?>"><?php echo $impresora['descripcion']?></label>
          <input type="number" name="<?php echo $key?>" class="form-control"  placeholder="<?php echo $impresora['ubicacion'];?>">
        <?php endforeach?>

    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Periodo</label>
      <input type="number" name="periodo" class="form-control" id="periodo" placeholder="periodo">
    </div>
  </div>
  
 
  <div class="col-md-8 mb-4">
    <input type="file" name="archivo[]" multiple="multiple">
		</div>
  
  <button type="submit" id="btnContinuar" class="btn btn-primary">Guardar y continuar</button>














  

 <!--    <form id="formR" action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
        
        <input type="submit" value="Enviar" id="upload" class="trig">
    </form>
 -->




















</form>
  </div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>
