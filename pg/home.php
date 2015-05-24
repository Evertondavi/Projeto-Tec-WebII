<!DOCTYPE html>
<html>
    <head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="..\css\style.css" type="text/css" />
	<link rel="stylesheet" href="..\css\pgStyle.css" type="text/css" />
        <link rel="icon" href="img\logo.ico" type="image/x-icon" />
        <title>Psíquico</title>
    </head>
    
    <body>
        <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
            <p>© Copyright - Todos os Direitos Reservados</p>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
            <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></div>
<div class="fb-send" data-href="https://developers.facebook.com/docs/plugins/"></div>
<div class="fb-comments" data-href="http://developers.facebook.com/docs/plugins/comments/" data-numposts="5" data-colorscheme="light"></div>
        </footer>
    </body>
</html>
