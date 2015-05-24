<?php include "conecta_mysql.php";

		  
		  mysqli_query ($conexao,"DELETE FROM comentario WHERE id = $_GET[id]")or die (mysql_error());
		  header('Location: faq.php?admin=noticias');
		     
	
	
		
	?>
