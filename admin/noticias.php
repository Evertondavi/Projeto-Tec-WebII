<?php include "conecta_mysql.php";?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  href="estilo.css" rel="stylesheet" type="text/css" />
        
        
    </head>
    <body>
	
	 
<?php 
     
	$seleciona = mysql_query("SELECT * FROM comentario WHERE status ='nao'");
		echo $seleciona;
               if($seleciona == null){
			echo "Você não tem comentarios";
		}else{
			
	
		while($linha = mysql_fetch_array($seleciona)){
			 echo "<h3>" .$linha['nome']."</h3><br/>";
                         echo "<p>".$linha['email']."</p><br/>";
			 echo "<p>".$linha['comentario']."</p><br/>";
			 echo "<a href=\"permitir.php?id= " . $linha['id']. "\">Permitir</a>";
			 echo "<span>        </span>";
			 echo "<a href=\"excluir.php?id= " . $linha['id']. "\">Deletar</a>";
?>


 
<?php 
	} }

			
		
               
			
            
			 
			 
			 
?>
</body>
</html>
