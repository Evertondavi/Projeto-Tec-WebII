<?php


  // abrir conexao e selecionar o banco de dados
  // CONFERIR A PORTA ABERTA PARA MYSQL NO MACKENZIE - 3308
   $banco = "login";
   $conexao = mysql_connect("localhost","root","");
   mysql_select_db($banco) or die(mysql_error());
  
  // tratamento de erros
  	

?>


