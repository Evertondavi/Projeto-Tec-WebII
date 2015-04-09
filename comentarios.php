<?php include "conecta_mysql.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  href="estilo.css" rel="stylesheet" type="text/css" />
        
        
    </head>
    <body>
	
	 <form action="insertCom.php"  enctype="multipart/form-data" method="post">
            <p>Nome:</p><input type="text" name="nome" maxlength="100" />
			<p>Email:</p><input type="text" name="email" maxlength="100" />
			<p>Comentario:</p><textarea type="text" name="coment" cols="30" rows="10"></textarea><br />
			<input type="hidden" name="acao" value="enviar" />
			<input type="submit"value="Enviar" />
        </form>
        <hr />
     
<?php 

	$seleciona = mysql_query("SELECT * FROM comentario WHERE status ='sim'");
		if(@mysql_num_rows($seleciona) == 0){
		  echo 'Seja o primeiro a comentar';
		}else{
		while($linha = mysql_fetch_array($seleciona)){
	
?>
<h4><?php  echo $linha['nome'];?></h4>
<p><?php  echo $linha['comentario'];?></p>

<?php } }?>
</body>
</html>
