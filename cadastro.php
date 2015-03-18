<!DOCTYPE html>
<html>
    
    <body>

        <form name="form1" method="post" action="enviar.php">
            <p>Nome: 
                <input name="nome" type="text" id="nome">
            </p>
            <p>Email: 
                <input name="email" type="text" id="email">
            </p>
            <p>Assunto: 
                <input name="assunto" type="text" id="assunto">
            </p>
            <p>Mensagem:<br>
                <textarea name="mensagem" id="mensagem"></textarea>
            </p>
            <p>
                <input type="submit" name="Submit" value="Enviar">
            </p>
        </form>
    </body>
    </html>


<DOCTYPE! html>
<html>
<head>
<title>Login</title>

<meta charset="UTF-8">

<body>
<p>Login</p>

<form action="Login.html" method="post">


Email:<br>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

SENHA:<br>
<input type="password" name="senha" size="20" /><br>


<input type="submit" a href="Home.html" value="Log in">
<br></br>

<a href="signup.php">Sign UP</a>

<SCRIPT> 
function acesso()
{ 
window.location = document.email.senha.value + ".html"
if (document.email.senha.value == "")
{alert ('Senha incorreta.');
document.email.senha.focus();
window.location = "Login.html"
return false;}
} 

</body>
</html>



