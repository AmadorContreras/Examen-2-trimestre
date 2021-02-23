<?php 
	$conexion=mysqli_connect('localhost','root','','amador_examen');
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
        <title>Cursa 1 de Març</title>
    </head>
    <body>
        <header>
            <div class="container-fluid text-center">
                <br>
                <h3>Cursa 1 de Març</h3>
                <p>
                    registrar-te per a poder participar en la cursa de l'1 de març
                </p>
              </div>
              
              <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
                <a class="navbar-brand" href="index.php">Amador Examen</a>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Registre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cursa</a>
                  </li>
                </ul>
              </nav>
              <div class="container" id="cuerpo">
            <div class="row text-center">
                <div class="col-lg-2" id="txt-registro">
                    
                </div>
                <div class="col-lg-8" id="tabla-registro">
                    <h1>
                        Registro
                    </h1>
                    <div>
                    <form action="prueba.php" method="POST" id="formulario">
                        <label for="nombre" class="col-lg-10">Nombre <span><em>(requerido)</em></span></label>
                        <input type="text" name="nombre"  class="form-input col-lg-10" required/>   
                        <label for="apellido" class="col-lg-10" >Apellido <span><em>(requerido)</em></span></label>
                        <input type="text" name="apellido" class="form-input col-lg-10" required/>
                        <center> <input class="form-btn col-lg-8" name="submit" type="submit" value="Suscribirse" /></center>
                        </p>
                    </form>
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        </header>

        <footer>
            <div class="container col-12 text-center">
                <h5>
                    Amador Contreras Lagos
                </h5>
            </div>
        </footer>
    </body>
</html>