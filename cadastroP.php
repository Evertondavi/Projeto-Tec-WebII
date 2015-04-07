<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Cadastro de Psicólogos</title>
		<script type="text/javascript">
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
        alert("Preencha a confirmação de senha corretamente.");
        form.conf_senha.focus();
        return false;
        }
        if (form.senha.value!=form.conf_senha.value) {
        alert("A senha e a confirmação tem de ser iguais.");
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
   
<h1> Cadastro de Psicólogos </h1> 

 <form name="cadastro" method="post" action="cadastro.php" onsubmit="return valida();">
 <label for="imagem"><h3>Imagem de perfil:</h3></label>
 <input type="file" name="imagem"/>
 <h3>Nome:</h3>
 <input type="text" name="Nome" placeholder="Nome"/>
 <h3>Sobrenome:</h3>
 <input type="text" name="Sobrenome" placeholder="Sobrenome"/>
 <h3>E-mail:</h3>
 <input type="email" name="E-mail" placeholder="E-mail"/>
 <h3>Senha:</h3>
 <input type="password" name="Senha" size="10" maxlength="10" placeholder="Senha"/>
 <h3>Confirmar senha:</h3>
 <input type="password" name="Senha" size="10" maxlength="10" placeholder="Confirmar senha"/>

 <h3>Sexo:</h3> 
 <input type="radio" name="sexo" value="Masculino"/>Masculino<br>
 <input type ="radio" name="sexo" value="Feminino"/>Feminino<br>
 <br></br>
 <h3>Ano da Faculdade:</h3><input type="radio" name="Ano da Faculdade" value="1º Ano"/>1º Ano<input type="radio" name="Ano da Faculdade" value="2º Ano"/>2º Ano
 <input type="radio" name="Ano da Faculdade" value="3º Ano"/>3º Ano<input type="radio" name="Ano da Faculdade" value="4º Ano"/>4º Ano
 <input type="radio" name="Ano da Faculdade" value="5º Ano"/>5º Ano
 <br></br>
 <h3>CPF:</h3><input type="text" name="cpf" size="11" maxlength="11" placeholder="CPF"><input type="text" name="cpf2" size="2" maxlength="2" />
 <br></br>
 <label for="imagem"><h3>Histórico Universitário:</h3></label>
 <input type="file" name="imagem"/>
 <br></br>
 <input type="submit" name="registrar" value="Registrar"/> 

 </body>
 </html>
 
 
 

       
