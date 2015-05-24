<?php
  //include "conecta_mysql.php";
  
?>
<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" href="..\css\cssAd.css" type="text/css" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Administrador</title>
 

</head>
<body class="all">
<header class="all">
      <h2>Seja bem vindo!!!</h2>
      <hr>
      <nav id="nav">
       <ul>
          <li><a href="faq.php">Home</a></li>
          <li><a href="faq.php?admin=insert">Inserir Noticia</a></li>
          <li><a href="faq.php?admin=noticias">Comentarios</a></li>
         <li><a href="faq.php?admin=conteudo">Conteudo</a></li>

        </ul>
    </nav>
</header>

<section class="all" id="navbar">
  <?php
    if(!$_GET){
     include ("insert.php");

    }else{
      include ($_GET['admin'] . '.php');
   }

?>
 
</section>
  
 
</body>
</html>
