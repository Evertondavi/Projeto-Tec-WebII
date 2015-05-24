<?php include "conecta_mysql.php";

	
   
	if (isset($_POST['acao'])&& $_POST['acao']== 'enviar'){
		$n = trim(strip_tags(ucwords($_POST['nome'])));
		$email = trim(strip_tags($_POST['email']));
		$comentario = trim(strip_tags($_POST['coment']));
		
	if(empty($n) || empty($email) || empty($comentario)){
	  echo '<script>alert("Preencha todos os campos");</script>';
	}elseif(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\.\-]+\.[a-z]{2,4}$/i",$email)){
	  echo '<script>alert("E-mail Inválido");</script>';
	}else{
	  $status = 'nao';
	 $pasta = '../img'; 
	 $permitido = array('image/jpg', 'image/jpeg', 'image/pjpeg' );
	
	$img = $_FILES['img'];
	$tmp = $img['tmp_name'];
        $name = $img['name'];
	$type = $img['type'];
	
	require ('funcao.php');
	if(!empty($name) && in_array($type, $permitido)){
		$nome = 'downsmaster-'.md5(uniqid(rand(), true)).'.jpg';
		upload($tmp, $nome, 200, $pasta);


	  $inserir = mysqli_query($conexao,"INSERT INTO comentario (nome, email, comentario, image,status)VALUES('$n','$email', '$comentario' ,'$nome','$status') ");
	  echo '<script>alert("Mensagem enviada com sucesso!!!");</script>';
	  header('Location: ../pg/home.php');
	}
	}
}
	 mysqli_close($conexao);
	 ?>
