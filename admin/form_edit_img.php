
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
	<link type="text/css" rel="stylesheet" href="..\css\cssFE.css" />
        <title></title>
    </head>
    <body>
	
<?php
	 include "conecta_mysql.php";
		$id = $_GET["id"];
		$sql = mysqli_query($conexao,"SELECT * FROM image   where id='$id'");
		$exibe = mysqli_fetch_assoc($sql);
		$pega = $exibe['id'];
	 	$imagem = $exibe['foto'];
		$texto = $exibe['texto'];
	
	
?>
        <form action="update.php"  class="form" enctype="multipart/form-data" method="post">
		
            <p>Titulo:</p><input type="text" class="inP1" name="titulo" maxlength="100" value="<?php echo $exibe["titulo"];?>"/><br>
            <img class="img" src="../img/<?php echo $imagem; ?>" />
			<p>Imagem:</p><input class="ipF" type="file" name="foto" />
			<p>Texto:</p><textarea type="text" name="texto" cols="30" rows="10" value=""><?php echo $texto;?></textarea><br />
			<input type="hidden" name="id" value="<?php echo $exibe["id"];?>" />
			<input type="submit" value="Editar" class="edit" />
        </form>
		
	
</body>
</html>
