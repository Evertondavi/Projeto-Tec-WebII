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
			<p>Imagem:</p><input type="text" name="imagem"/>
			<p>Texto:</p><textarea type="text" name="texto" cols="30" rows="10"></textarea><br />
			<input type="hidden" name="acao" value="cad" />
			<input type="submit"value="cadastrar" />
        </form>
<?php 
	if(isset($_POST['acao']) && $_POST['acao'] == 'cad'){
	  $titulo = $_POST['titulo'];
	  $imagem = $_POST['imagem'];
	  $texto = $_POST['texto'];
	  
	  if(empty($titulo) || empty($texto)){
		echo '<script>alert("Preencha todos os campos");</script>';
	  }else{
	    $inserir = mysql_query("INSERT INTO postagem (titulo, imagem , texto)VALUES('$titulo', '$imagem', '$texto')");
		echo '<script>alert("Postagem cadastrada com sucesso!!");</script>';
	  }
	}
?>
    </body>
</html>
