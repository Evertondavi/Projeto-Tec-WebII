
<?php
 
//obtendo os valores digitados
$nome = $_POST['nome'];
$senha = $_POST['senha'];


//acesso ao banco de dados
include "conecta_mysql.php";

$res =  mysqli_query($conexao, "SELECT * FROM log where nome='$nome' and senha='$senha'");
//testa se a consulta retornou algum registro

if($res == false){
     echo "<html></body>";
     echo "<p aling=\"center\"><a href=\"inde.php\">Voltar</a></p>";
     echo "</html></body>";
    }else{
        
     setcookie("nome", $nome);
     setcookie("senha", $senha);
    include "principal.php";// direciona para a página inicial dos usuários cadastrados
    }

   mysqli_close($conexao);
?>

