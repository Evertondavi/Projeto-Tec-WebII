<?php
  // conctando ao BD  include "conecta_mysql.php";
  
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<title></title>
    <style>
     form{width:300px;margin:0 auto;margin-top:200px;}
     #botao{background:red;margin-left:90px;}
     
     
     
    </style>


</head>
<body>
    <form action="login.php" method="POST">
        
        <p>Name
        <input type="text" name="nome" />
        </p>
        <p>Senha
        <input type="password"  name="senha" />
        </p>
        <input type="submit" value="Logar" id="botao" />
        
        
    </form>
</body>
</html>
