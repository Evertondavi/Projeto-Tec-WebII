<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="..\css\style.css" type="text/css" />
	<link rel="stylesheet" href="..\css\pgStyle.css" type="text/css" />
    </head>
    
<body>
     <header class="topo">
	 
	 <form action="create.php" method="POST" class="form">
        <span>Email: </span>
        <input type="text" name="nome" />
		
        <span>Senha: </span>
        <input type="password"  pattern="[0-9]*" name="senha" />
		
        <input type="submit" value="Entrar" id="botao" />           
    </form>
	 <img src="..\img\logo.png" alt="logo" class="imgTopo" />
	 <nav class="menu">
       <ul class="a">
          <li><a href="home.php">Home</a></li>
          <li><a href="home.php?pg=noticias">Notícias</a></li>
          <li><a href="home.php?pg=comentarios">Forum</a></li>
		  <li><a href="home.php?pg=sobre">Sobre</a></li>
		  <li><a href="home.php?pg=contato">Contato</a></li>
        </ul>
     </nav>
	 
	 </header>    
	
     <?php
    if(!$_GET){
     include ("pgInicio.php");

    }else{
      include ($_GET['pg'] . '.php');
   }

?>
 <footer class="rodape">
	<p>Copyright - Todos os Direitos Reservados</p>
 </footer>
</body>
</html>

