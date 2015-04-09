<?php include "conecta_mysql.php";

	
   
	if (isset($_POST['acao'])&& $_POST['acao']== 'enviar'){
		$nome = trim(strip_tags(ucwords($_POST['nome'])));
		$email = trim(strip_tags($_POST['email']));
		$comentario = trim(strip_tags($_POST['coment']));
		
	if(empty($nome) || empty($email) || empty($comentario)){
	  echo '<script>alert("Preencha todos os campos");</script>';
	}elseif(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/i",$email))
	  echo '<script>alert("E-mail Inválido");</script>';
	else{
	  $status = 'nao';
	  $inserir = mysql_query("INSERT INTO comentario (nome, email, comentario, status)VALUES('$nome','$email', '$comentario' ,'$status') ");
	  echo '<script>alert("Mensagem enviada com sucesso!!!");</script>';
	  header('Location: comentarios.php');
	}
	}
	
	 ?>
  