<?php include "conecta_mysql.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  href="estilo.css" rel="stylesheet" type="text/css" />
        
        
    </head>
    <body>
        
     <?php
		$seleciona = mysql_query("SELECT * FROM image ORDER BY id DESC") or die (mysql_error());;
		$conta = mysql_num_rows($seleciona);
		
		if($conta <= 0){
			echo "Não ha nenhum dado no banco";
		}else{
		   while($ln = mysql_fetch_array($seleciona)){
		   $titulo   = $ln['titulo'];
		   $imagem   = $ln['foto'];
		   $conteudo = $ln['texto'];
		   
		
	 ?>
        <article id="post">
            <h1 ><?php echo $titulo;?></h1>
            <img src="img/<?php echo $imagem; ?>" />
            <p><?php echo $conteudo;?></p>
           
        </article>

<?php }}    echo $imagem?>

</body>
</html>
