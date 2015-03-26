<?php
include "conecta_mysql.php";


$nome = $_POST['nome'];
$senha = $_POST['senha'];
$sql = "INSERT INTO log (nome , senha) VALUES ('".$nome."', ".$senha.")";
// echo $sql;

$resultado = mysqli_query($conexao, $sql) or die
        ("Não foi possivel executar a SQL:".  mysqli_error($conexao));

if($resultado === TRUE){
     include "principal.php";
     
}else{
        echo "</br>Erro na inserção";
    }
    
    mysqli_close($conexao);
        
        
        
        
        
?>

