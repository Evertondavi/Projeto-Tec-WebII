<?php


  // abrir conexao e selecionar o banco de dados
  // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE - 3308
  $conn = mysqli_connect("localhost","root","administrador");
  $sql = "CREATE DATABASE  IF NOT EXISTS myDB";
  if (mysqli_query($conn, $sql)) {
    //echo "Database created successfully";
  } else {
    echo "Error creating database: " . mysqli_error($conn);
  }
mysqli_close($conn);
    $conexao = mysqli_connect("localhost","root","administrador", "myDB");
 
  
  
  // tratamento de erros
  if (mysqli_connect_errno())
  {
      echo "Não foi possível conectar: " . mysqli_connect_error();
  } else {
  
  $myfile = fopen("banco.sql", "r") or die("Unable to open file!");
  $sql = fread($myfile,filesize("banco.sql"));
  // $q = mysqli_multi_query($conexao,$sql);
	
	
}  
?>


