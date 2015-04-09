<?php
include "conecta_mysql.php";


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = mysql_query("INSERT INTO log(nome , sobrenome, email, senha) 
      VALUES ('$nome', '$sobrenome' , '$email', '$senha')") or die
        ("Não foi possivel executar a SQL:".  mysql_error($conexao)); 


if($sql === TRUE){
      header('Location: home.php');  
     
}else{
        echo "</br>Erro na inserção";
    }
    
    mysql_close($conexao);
        
       
        
        
        
        
?>

