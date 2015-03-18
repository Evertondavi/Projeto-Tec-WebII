<DOCTYPE! html>
<html>
<head>
<title>Sign up</title>



<meta charset="UTF-8">

<body>
<p>Sign up</p>

<form action="usuario" method="get">

NOME:<br>
<input type="text" name="nome" size="20" placeholder="NOME"></input><br>

Email:<br>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

SENHA:<br>
<input type="password" name="senha" size="20" /><br>

CONFIRMAR:<br>
<input type="password" name="confirmarsenha" size="20" /><br>

<p>SEXO:</p>
<input type="radio" name="sexo" value="feminino"/>Feminino<br>
<input type="radio" name="sexo" value="masculino"/>Masculino<br>
<br></br>

<input type="submit" value="Acesso">

<?php
 
$email = $_POST['email'];
$senha = MD5($_POST['senha']);
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
$query_select = "SELECT email FROM usuarios WHERE email = '$email'";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);
$logarray = $array['email'];


if($email == "" || $email == null){
        echo"<script language='javascript' type='text/javascript'>alert('Digite e-mail');window.location.href='Signup.html';</script>";
 
        }else{
            if($logarray == $email){
 
                echo"<script language='javascript' type='text/javascript'>alert('Esse email jรก existe');window.location.href='Signup.html';</script>";
                
 
            }else{
                $query = "INSERT INTO usuarios (email,senha) VALUES ('$email','$senha')";
                $insert = mysql_query($query,$connect);
                 
                if($insert){
                    echo"<script language='javascript' type='text/javascript'>alert('Entrou com sucesso!');window.location.href='Signup.html'</script>";
                }else{
                    echo"<script language='javascript' type='text/javascript'>alert('Nao pode entrar');window.location.href='Signup.html'</script>";
                }
            }
        }
?>




</body>
</html>

