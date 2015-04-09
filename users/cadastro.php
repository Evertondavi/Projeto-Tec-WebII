<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cadastro de Usuáiros</title>
<script>
		function valida(form){
		if(form.nome.value==""){
		alert("Preencha o nome corretamente:");
		form.nome.focus();
		returne false;
		}
		function valida(form){
		if(form.sobrenome.value==""){
		alert("Preencha o sobrenome corretamente:");
		form.nome.focus();
		returne false;
		}
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
        }
        if (form.conf_senha.value=="" || form.conf_senha.value.length < 10) {
        alert("Preencha a confirma??o de senha corretamente.");
        form.conf_senha.focus();
        return false;
        }
        if (form.senha.value!=form.conf_senha.value) {
        alert("A senha e a confirma??o tem de ser iguais.");
        form.conf_senha.focus();
        return false;
		}
		if (form.sexo[0].checked==false && form.sexo[1].checked==false) {
        alert("Selecione o sexo.");
        return false;
        }
		var Soma; 
		var Resto; 
		Soma = 0; 
		if (strCPF == "00000000000") return false; 
		for (i=1; i<=9; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)) Resto = 0;
		if (Resto != parseInt(strCPF.substring(9, 10)) ) return false;
		Soma = 0;
		for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
		Resto = (Soma * 10) % 11;
		if ((Resto == 10) || (Resto == 11)) Resto = 0; if (Resto != parseInt(strCPF.substring(10, 11) ) ) return false;
		return true;
		} 
		var strCPF = "12345678909";
		alert(TestaCPF(strCPF));
</script>
</head>

<body>

<h1> Cadastro de Usuáiros </h1>

<form action="create.php" method="Post" name="cadastroU">

<h3>Nome:</h3>
<input type="text" name="nome" placeholder="Nome"/>
<h3>Sobrenome:</h3>
<input type="text" name="sobrenome" placeholder="Sobrenome"/>
<h3>E-mail:</h3>
<input type="email" name="email" placeholder="E-mail"/>
<h3>Senha:</h3>
<input type="password" name="senha" size="10" maxlength="10" placeholder="Senha"/>
<br></br>

<input type="submit" value="Cadastrar" name="cadastrar">
</form>

</body>
</html>

