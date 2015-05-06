
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
   alert("Use a senha igual a anterior.");
   document.frm.confirmarSenha.focus();
   return;
  }
  if(useremail == ''){
   alert("Preencha o email corretamente.");
   document.frm.email.focus();
   return;
  }
  // 비밀번호 일치 여부
  if(senha != confirmar){
   alert("A senha é diferente.");
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
  
  document.frm.action="create.php";
  document.frm.method="get";
  document.frm.submit();
 }
</script>

 <form action="create.php" name="frm" method="post" class="formUser">
  <table>
  <p> Cadastro gratuito</p>
   <tr>
    <td><input type="text" name="nome" id="" placeholder ="Nome"></td>
   </tr>
   <tr>
    <td><input type="text" name="sobrenome" id="" placeholder="Sobrenome"></td>
   </tr>
   <tr>
    <td><input type="password" name="senha" id="" placeholder="Senha"></td>
   </tr>
   <tr>
    <td><input type="password" name="confirmarSenha" id="" placeholder="Confirmar senha"></td>
   </tr>
   <tr>
    <td><input type="text" name="email" id="email" placeholder="E-mail" ></td>
   </tr>
                <td>

                </td>
   </tr>
    <td colspan="2"><input type="button" value="Cadastrar" onclick="checkValue()"></td>
   </tr>
  </table>
 </form>
  <section class="one">
  <p class="acs">Para ter acesso ao site faça seu cadastro.</p>
  <article>
   <p class="circle"><span>1</span></p>
   <p class="text"> Preencha os campos do formulário ao lado e clique no botão CADASTRAR para realizar seu cadastro no site.</p>
    <hr>
	<p class="circle"><span>2</span></p>
   <p class="text">Após o preenchimento você terá acesso ao chat e poderá falar com o psícologo em tempo real.</p>
  <hr>
  </article>
  <article class="second">
	<p>O que é orientação psicológica online? </br>É uma modalidade de atendimento realizada em meios eletrônicos por um psicólogo, através da internet, objetivando oferecer orientação para situações pontuais e objetivas.
</p>
<hr>
<p>Como será realizado o atendimento? </br>Os atendimentos serão realizados exclusivamente por Chat ou via Skype e as sessões terão duração de 50 minutos</p>

  </article>
  </section>
