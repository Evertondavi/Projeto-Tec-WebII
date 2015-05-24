?php
 include "conecta_mysql.php";

 
 
$id = $_POST['id'];
 $titulo = $_POST['titulo'];


         $pasta = '../img'; 
	 $permitido = array('image/jpg', 'image/jpeg', 'image/pjpeg' );
	
	$img = $_FILES['foto'];
	$tmp = $img['tmp_name'];
        $name = $img['name'];
	$type = $img['type'];

	require ('funcao.php');

	if(!empty($name) && in_array($type, $permitido)){
	$nome = 'downsmaster-'.md5(uniqid(rand(), true)).'.jpg';
        upload($tmp, $nome, 500, $pasta);

	    

 }
 $texto = $_POST['texto'];
 
 if(mysqli_query($conexao,"UPDATE image set titulo='$titulo', foto='$nome', texto='$texto' where id='$id'")){
	 header('Location: faq.php?admin=noticias');
	exit;
 
 }else{
 
	mysql_error;
	exit;
 
 
 
  
 }
 ?>
