<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Log in</title>
<script>
		var filtro_mail = /^.+@.+\..{2,3}$/
        if(!filtro_mail.test(form.email.value) || form.email.value=="") {
        alert("Preencha o E-mail corretamente.");
        form.email.focus();
        return false;
        }
		if (form.senha.value=="" || form.senha.value.length < 10) {
        alert("Preencha a senha corretamente.");
        form.senha.focus();
        return false;
</script>
</head>

<body>
<h1> Log in </h1> 

<form action="Login.html" method="post">


<h3>Email:</h3>
<input type="text" name="email" size="20" placeholder="E-MAIL"></input><br>

<h3>SENHA:</h3>
<input type="password" name="senha" size="20" /><br>

<br></br>
<input type="submit" a href="Home.html" value="Log in">
<br></br>

<a href="cadastroU.html">Sign UP</a>



</body>
</html>
