<?php include "conecta_mysql.php";

	
	 

          if(!isset($_POST['permitir'])){
		  
		  $q = "SELECT * FROM comentario WHERE id= $_GET[id]";
		  $result = mysql_query($q);
		 //$person = mysql_fetch_array($result);
		  $q = "UPDATE comentario SET  status = 'sim' WHERE id= $_GET[id] ";
		  mysql_query($q)or die(mysql_error());
		  header('Location: noticias.php');
		  }      
	
	
		
	?>		 
			

