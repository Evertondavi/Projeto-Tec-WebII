<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link  href="estilo.css" rel="stylesheet" type="text/css" />
          <link rel="stylesheet" href="..\css\cssAd.css" type="text/css" />
        
    </head>
    <body>
       <section >
    <?php
	 include "conecta_mysql.php";
		$seleciona = mysqli_query($conexao,"SELECT * FROM image ORDER BY id") or die (mysql_error());;
		$conta = mysqli_num_rows($seleciona);
		
		if($conta <= 0){
			echo "Não ha nenhum dado no banco";
		}else{
					    echo	"<section class='tudoTO'>";
		   while($ln = mysqli_fetch_array($seleciona)){

		   echo  "<article class='tudoC'>";
                   $pega = $ln['id']; 
		   $id = "<a class='btED' href=\"form_edit_img.php?&id= " . $pega. "\">Editar</a>";	
		   $ex = "<a class='btEx' href=\"excluirN.php?&id= " . $pega. "\">Excluir</a>";	
		   $titulo   = $ln['titulo'];
		   $imagem   = $ln['foto'];
		   $conteudo = $ln['texto'];
		 
		  echo "<h1 class='txtH'>$titulo<h1/>";
		  echo  "<img class='imgI' src='../img/$imagem'>";
		  echo "<p class='txtC'>$conteudo</p>";
		 
		  echo   $id;	
	          echo  $ex;	
		  echo "</article>";
			
	          	
}
 	
echo "</section>";

}

	 ?>
</section>	
</body>
</html>
