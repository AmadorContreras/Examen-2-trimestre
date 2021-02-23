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
                    <a class="nav-link" href="registro.php">Registre</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Cursa</a>
                  </li>
                </ul>
              </nav>
              <div class="container" id="cuerpo">
            <div class="row text-center">
                <div class="col-lg-4" id="txt">
                    <h1>
                        Texto
                    </h1>
                    <div class="container col-lg-12" id="img-cursa">
                        <img src="img/cuadre-txt/cursa-2.jpg" alt="...">
                    </div>
                    <div class="container text-justify" id="parrafo">
                        <p>
                            Comença a preparar-te ja per a la carrera de l'1 de març. Registrar-se aquí mateix per a participar i poder córrer i gaudir de les millors rutes.
                        </p>
                    </div>
                    <div class="container col-lg-12" id="img-cursa-2">
                        <img src="img/cuadre-txt/cursa.jpg" alt="...">
                    </div>
                </div>
                <div class="col-lg-7" id="tabla">
                    <h1>
                        Tabla
                    </h1>
                    <div>
                        <table class=" table table-striped">
                                    
                            <tr class="table-dark">
                                <td>ID</td>
                                <td>Nom</td>
                                <td>Llinatge</td>
                                <td>Data de inscripcio</td>
                            </tr>
                            <?php 
                            $sql="SELECT * from cursa";
                            $result=mysqli_query($conexion,$sql);
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <tr>
                                <td><?php echo $mostrar['ID'] ?></td>
                                <td><?php echo $mostrar['nom'] ?></td>
                                <td><?php echo $mostrar['llinatges'] ?></td>
                                <td><?php echo $mostrar['data-inscripcio'] ?></td>
                            </tr>
                            <?php 
                            }
                            ?>
                            
                            
                        </table>
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
 
       <script>
            function alerta(){
            alert('Últimes places disponibles per la cursa de l’1 de Març');
            }
            window.onload = function(){
            setTimeout('alerta()',2000);
            }
        </script>


</html>