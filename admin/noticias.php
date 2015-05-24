<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  href="..\css\cssFE.css" rel="stylesheet" type="text/css" />
        
        
    </head>
    <body>
	
	 
<?php 
     include "conecta_mysql.php";
	$seleciona = mysqli_query($conexao,"SELECT * FROM comentario WHERE status ='nao'");
	
               if(mysqli_num_rows($seleciona) == null){
			echo "Você não tem comentarios";
		}else{
			
		echo "<section class='allC'>";
		while($linha = mysqli_fetch_array($seleciona)){
			echo  "<article class='tudoCOM'>";
			
			$imagem   = $linha['image'];
			  echo  "<img  class='imgCa' src='../img/$imagem'>";
			 echo "<h3 class='name'>" .$linha['nome']."</h3><br/>";
            		echo "<p class='email'>".$linha['email']."</p><br/>";
			 echo "<p class='text'>".$linha['comentario']."</p><br/>";
			 echo "<a href=\"permitir.php?id= " . $linha['id']. "\">Permitir</a>";
			 echo "<span>        </span>";
			 echo "<a href=\"excluir.php?id= " . $linha['id']. "\">Deletar</a>";
			 echo "</article>";
			 } 
			 echo "</section>";
			 }

			
                mysqli_close($conexao);
?>


</body>
</html>
