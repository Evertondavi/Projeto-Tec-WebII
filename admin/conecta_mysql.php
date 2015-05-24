<?php

  // abrir conexao e selecionar o banco de dados
  // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE - 3308
   $banco = "login";
   $conexao = mysql_connect("localhost","root","");
   mysql_select_db($banco) or die(mysql_error());
  
  // tratamento de erros
     	$host = "mysql.hostinger.com.br";
$user = "u548445490_root";
$pass = "123456";
$banco = "u548445490_psico";
//$banco = "login";
  $conexao = mysqli_connect($host,$user,$pass)or trigger_error(mysql_error(),E_USER_ERROR);

//seleciona banco de dados

 mysqli_select_db($conexao,$banco);
 //mysqli_close($conexao);
  	
	

?>


