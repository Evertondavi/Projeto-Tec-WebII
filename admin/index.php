<?php
  // conctando ao BD  include "conecta_mysql.php";
  
?>
<?php
  // conctando ao BD  include "conecta_mysql.php";
  
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title></title>
    <style>
     form{ 
 	border:1px solid #000;height:300px; border-radius:8px;background: #2D3688;
     width:500px;margin:0 auto;margin-top:150px;}
     #botao{background:#fff;margin-left:55px;width:100px;color:#2D3688;}

     form .login{margin:0 auto;width:200px;margin-top:100px;color:#fff;}
     .imgL{margin: 0 auto; margin-top: 150px;border:1px solid #FFF;width:90px;}
     .imgL img{float: left;}
     
    </style>


</head>
<body>
<article class="imgL">
<img src="logo.png" />
</article>
    <form action="login.php" method="POST">
        <article class="login">
        <p>Name
        <input type="text" name="nome" />
        </p>
        <p>Senha
        <input type="password"  name="senha" />
        </p>
        <input type="submit" value="Logar" id="botao" />
        </article>
        
    </form>
</body>
</html>
