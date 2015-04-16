<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>login</title>
 <script type="text/javascript">
  function checkValue() {

  var username = document.frm.nome.value;
  var sobre = document.frm.sobrenome.value;
  var senha = document.frm.senha.value;
  var confirmar = document.frm.confirmarSenha.value;
  var useremail = document.frm.email.value;

  console.log(username);
  console.log(senha);
  console.log(confirmar);
  console.log(useremail);
  console.log(sobre);

  //유효성검사
  if(username == '') {
   alert("Preencha o nome corretamente.");
   document.frm.nome.focus();
   return; // 반환후 중지
  }
  if(sobre == '') {
   alert("Preencha o sobrenome corretamente.");
   document.frm.sobrenome.focus();
   return; // 반환후 중지
  }
  if(senha == ''){
   alert("Preencha a senha corretamente.");
   document.frm.senha.focus();
   return;
  }
  if(confirmar == ''){
   alert("Preencha confirmar senha.");
   document.frm.confirmarSenha.focus();
   return;
  }
  if(useremail == ''){
   alert("Preencha email corretamente.");
   document.frm.email.focus();
   return;
  }
  // 비밀번호 일치 여부
  if(senha != confirmar){
   alert("A senha nao é igual.");
   document.frm.senha.value = '';
   document.frm.confirmarSenha.value = '';
   document.frm.senha.focus();
   return;
  }
  // 이메일 형식
  if(useremail.indexOf('@') < 1)
  {
   alert("Preencha.");
   document.frm.email.value = '';
   document.frm.email.focus();
   return;
  }
  // 올바른 양식이 입력된 것을 확인했다.
  // 현재 양식을 다른 페이지로 제출(값 전달)
  
  document.frm.action="test.html";
  document.frm.method="get";
  document.frm.submit();
 }
</script>
</head>
<body>
 <form name="frm" method="get" action="test.html">
  <table>
   <tr>
    <th>Nome:</th>
    <td><input type="text" name="nome" id="" placeholder ="Nome"></td>
   </tr>
   <tr>
    <th>Sobrenome:</th>
    <td><input type="text" name="sobrenome" id="" placeholder="Sobrenome"></td>
   </tr>
   <tr>
   <tr>
    <th>E-mail:</th>
    <td><input type="text" name="email" id="" placeholder="E-mail"></td>
   </tr>
   <tr>
   <tr>
    <th>Senha:</th>
    <td><input type="password" name="senha" id="" placeholder="Senha"></td>
   </tr>
   <tr>
    <th>Confirmar senha:</th>
    <td><input type="password" name="confirmarSenha" id="" placeholder="Confirmar senha"></td>
   </tr>
   <th>Sexo:</th>
                <td>
                    <input type="radio" name="sexo" value="masculino" checked="checked">Masculino
                    <input type="radio" name="sexo" value="feminino">Feminino
                </td>
   </tr>
    <td colspan="2"><input type="button" value="Registrar" onclick="checkValue()"></td>
   </tr>
  </table>
 </form>
</body>
</html>

