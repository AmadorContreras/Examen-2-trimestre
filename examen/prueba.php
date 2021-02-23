<?php

  
  # Conexió a la base de dades on localhost és el hostname, devuser és el nom d’usuari, mysql és la contrasenya i pruebas el nom de la base de dades.
  $conn = mysqli_connect( 'localhost', 'root', '', 'amador_examen');

  
  # Sentència per insertar registres en la base de dades a la taula users
  // $insert = "insert into cursa( ID, Nom, Llinatges) values( '1','juan', 'Cortez')";
  // $insert = "insert into cursa( ID, Nom, Llinatges) values( '2','miquel', 'coll')";
  // $insert = "insert into cursa( ID, Nom, Llinatges) values( '3','Victoria', 'Martin')";
  $insert = "insert into cursa( ID, Nom, Llinatges) values( '4','Jose', 'Mauricio')";

  # Instrucció que executa  l’insert anterior en la base de dades PRUEBAS
  $return = mysqli_query ( $conn, $insert);

  # Mostrem per pantalla el resultat de l’insert
  print_r( ( $return));

  # Tanquem conexió
  mysqli_close( $conn);
