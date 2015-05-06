
 <?php include "conecta_mysql.php";?>
	
  <form class="forum" action="admin/insertCom.php"  enctype="multipart/form-data" method="post" >
  <figure class="imgPsico"> 
		<img src="..\img\img01.jpg" alt="imagem" width="200" height="150" />
    </figure>
            <input type="text" name="nome" maxlength="100" placeholder ="Nome" class="inpForum" />
			<input type="text" name="email" maxlength="100" placeholder ="E-mail" class="inpForum" />
			<textarea name="coment" cols="30" rows="10" placeholder ="Deixe sua pergunta" class="inpForum"></textarea><br />
			<input type="hidden" name="acao" value="enviar" />
			<input type="submit" value="Enviar" class="subForum" />
    </form>  
    
     
<?php 

	$seleciona = mysql_query("SELECT * FROM comentario WHERE status ='sim'");
		if(@mysql_num_rows($seleciona) == 0){
		  echo 'Seja o primeiro a comentar';
		}else{
		while($linha = mysql_fetch_array($seleciona)){
	
?>
<article class="comentario">
<h4><?php  echo $linha['nome'];?></h4>
<hr>
<p><?php  echo $linha['comentario'];?></p>
</article>

<?php } }?>
