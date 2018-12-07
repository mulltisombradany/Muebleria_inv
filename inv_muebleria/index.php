
<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">    
	<link rel="stylesheet" href="css/misEstilos.css">
	<link rel="stylesheet" href="formulario.css">
    <link rel="stylesheet" href="estilotablas.css">
</head>
  <body>

<!-- CRUD -->
<div class="container-fluid bg-light ">
<div class="container py-5" >
    <div class="row">
      <div class="col-md-3 ">
          <div class="card ml-auto sombra">
              <div class="card-body">
                <h4 class="card-title text-center">Registro de Producto</h4>

                <form action="procesa.php" method="post" id="guarda">
                  <input type="text" value="altasd" name="opc" hidden>
               
                <div class="form-group">
                  <label for="idproduc" class="text-left"> ID Producto </label>
                  <input type="text" class="form-control" id="idproduc" name="idproduc" placeholder="ID Producto">
                </div>
                    
                <div class="form-group">
                  <label for="tipod">Tipo de Producto</label>
                  <input type="text" class="form-control" id="tipod" name="tipod" placeholder="Tipo de Producto">
                </div>
                    
                <div class="form-group">
                  <label for="marca">Marca</label>
                  <input type="text" class="form-control" id="marca" name="marca" placeholder="Marca">
                </div>
                    
                <div class="form-group">
                  <label for="tamanio">Tamaño</label>
                  <input type="text" class="form-control" id="tamanio" name="tamanio" placeholder="Tamaño">
                </div>
               
                <div class="form-group">
                  <label for="tamanio">Color</label>
                  <input type="text" class="form-control" id="tamanio" name="tamanio" placeholder="Color">
                </div>
                    
                <div class="form-group">
                  <label for="descripcion">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripción">
                </div>
                    
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

              </div>
            </div>
      </div>

<footer class="footer">
    <div class="container text-center text-white">
      <span class="text-muted empresa"></span>
    </div>
</footer>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="js/scrollreveal.min.js"></script> -->
    <script src="js/helper.js"></script>
  </body>
</html>