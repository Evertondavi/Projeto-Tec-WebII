<?php
include "conecta_mysql.php";


$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$email = $_GET['email'];
$senha = $_GET['senha'];

$sql = mysql_query("INSERT INTO log(nome , sobrenome, email, senha) 
      VALUES ('$nome', '$sobrenome' , '$email', '$senha')") or die
        ("Não foi possivel executar a SQL:".  mysql_error($conexao)); 


if($sql === TRUE){
      header('Location: cadastro.php');  
     
}else{
        echo "</br>Erro na inserção";
    }
    
    mysql_close($conexao);
        
       
        
        
        
        
?>




