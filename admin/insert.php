<?php include "conecta_mysql.php";?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#"  enctype="multipart/form-data" method="post">
            <p>Titulo:</p><input type="text" name="titulo" maxlength="100"/>
			<p>Imagem:</p><input type="file" name="img"/>
			<p>Texto:</p><textarea type="text" name="texto" cols="30" rows="10"></textarea><br />
			<input type="hidden" name="acao" value="cad" />
			<input type="submit"value="cadastrar" />
        </form>
<?php 
	if(isset($_POST['acao']) && $_POST['acao'] == 'cad'){
	 $pasta = 'img'; 
	 $permitido = array('image/jpg', 'image/jpeg', 'image/pjpeg' );
	
	$img = $_FILES['img'];
	$tmp = $img['tmp_name'];
        $name = $img['name'];
	$type = $img['type'];
	
	require ('funcao.php');
	
	if(!empty($name) && in_array($type, $permitido)){
		$nome = 'downsmaster-'.md5(uniqid(rand(), true)).'.jpg';
		upload($tmp, $nome, 500, $pasta);
          


          $titulo = $_POST['titulo'];
	 // $foto = $_POST['foto'];
	  $texto = $_POST['texto'];
	  
	  if(empty($titulo) || empty($texto)){
		echo '<script>alert("Preencha todos os campos");</script>';
	  }else{
	    $inserir = mysql_query("INSERT INTO image (titulo, foto , texto)VALUES('$titulo', '$nome', '$texto')");
		echo '<script>alert("Postagem cadastrada com sucesso!!");</script>';
	  }
         }
	}
?>
    </body>
</html>
