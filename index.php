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
    <form action="create.php" method="POST">
        
        <p>Name
        <input type="text" name="nome" />
        </p>
        <p>Senha
        <input type="password"  pattern="[0-9]*" name="senha" />
        </p>
        <input type="submit" value="Cadastrar" id="botao" />
        
        
    </form>
</body>
</html>
