<!DOCTYPE html>
<html>
<head>
<title>Login</title>

<meta charset="UTF-8">

<body>
<p>Login</p>

<form action="Login.html" method="post">


Email:<br>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

Senha:<br>
<input type="password" name="senha" size="20" /><br>


<input type="submit" a href="Home.html" value="Log in">
<br></br>

<a href="signup.php">Sign UP</a>

<script> 
function acesso()
{ 
window.location = document.email.senha.value + ".html"
if (document.email.senha.value == "")
{alert ('Senha incorreta.');
document.email.senha.focus();
window.location = "Login.html"
return false;}
} </script>

</body>
</html>



