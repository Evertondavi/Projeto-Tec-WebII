<?php include "conecta_mysql.php";

		  
		  mysql_query ("DELETE FROM comentario WHERE id = $_GET[id]")or die (mysql_error());
		  header('Location: noticias.php');
		     
	
	
		
	?>		 
			









