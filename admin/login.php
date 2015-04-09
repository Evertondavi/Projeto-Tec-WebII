
<?php

//obtendo os valores digitados
$nome = $_POST['nome'];
$senha = $_POST['senha'];

 include "conecta_mysql.php";
//acesso ao banco de dados


$res = mysql_query("SELECT * FROM log where nome='$nome'") or die (mysql_error());

$row = mysql_num_rows($res);
if($row == 0){
     echo "Usuario não encontrado";
     header('Location: index.php');
    }else{
        if($senha != mysql_result($res,0, "senha")){
            echo "A senha está incorreta";
             header('Location: index.php');
        }else{
     setcookie("nome", $nome);
     setcookie("senha", $senha);
    header('Location: comentarios.php');// direciona para a página inicial dos usuários cadastrados
    }
    }
//testa se a consulta retornou algum registro


   mysql_close($conexao);
?>

