<?php

if(IsSet($_COOKIE["nome"]))
    $nome = $_COOKIE["nome"];
if(IsSet($_COOKIE["senha"]))
    $nome = $_COOKIE["senha"];

if(!(empty($nome)OR empty($senha))){
    
   //acesso ao banco de dados
   include "conecta_mysql.php";
   
   $res =  mysqli_query($conexao, "SELECT * FROM log where nome='$nome' and senha='$senha'");
   
}
mysqli_close($conexao);
?>
