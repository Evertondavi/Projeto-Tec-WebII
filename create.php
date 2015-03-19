<?php
include "conecta_mysql.php";


$nome = $_POST['nome'];
$senha = $_POST['senha'];

$resultado = mysqli_query($conexao, "INSERT INTO log(nome , senha)VALUES('".$nome."', ".$senha.")") or die
        ("Não foi possivel executar a SQL:".  mysqli_error($conexao));

if($resultado === TRUE){
     echo include "principal.php";
     
}else{
        echo "</br>Erro na inserção";
    }
    
    mysqli_close($conexao);
        
        
        
        
        
?>

