
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

<!--
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Log in</title>
<script type="text/javascript">
function checkValue() {

var useremail = document.frm.email.value;
var senha = document.frm.senha.value;

 console.log(useremail);
  console.log(senha);
  
   if(useremail == ''){
   alert("Preencha email corretamente.");
   document.frm.email.focus();
   return;
  }
  
  // 이메일 형식
  if(useremail.indexOf('@') < 1)
  {
   alert("E-mail inválido.");
   document.frm.email.value = '';
   document.frm.email.focus();
   return;
  }
  
  if(senha == ''){
   alert("Preencha a senha corretamente.");
   document.frm.senha.focus();
   return;
  }
  
   document.frm.action="Login.html";
  document.frm.method="get";
  document.frm.submit();
 }
 
 </script>
</head>
<body>
<form name="frm" method="get" action="Login.html">
 <table>
  <tr>
    <th>E-mail</th>
    <td><input type="text" name="email" id="" placeholder="E-mail"></td>
   </tr>
   <tr>
   <tr>
    <th>Senha</th>
    <td><input type="password" name="senha" id="" placeholder="Senha"></td>
   </tr>
   <td colspan="2"><input type="button" value="Registrar" onclick="checkValue()"></td>
   </tr>
   <tr>
   <td><a href="cadastro.html">Cadastra-se</a></td>
   </tr>
  </table>
 </form>
</body>
</html>
-->
