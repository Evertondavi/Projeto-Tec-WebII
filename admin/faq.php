<?php
  include "conecta_mysql.php";
  
?>
<!DOCTYPE html>

<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
    <style>
 .all{
    width: 800px;
    margin: 0 auto;
    border:1px solid #000;

}

h2{text-align: center;}

#nav{
     //border: 1px solid #f00;

}
#nav ul{
        border: 1px solid #333;
        list-style:none;
        background: #f4f4f4;
        height:40px;
}

#nav ul li{
            float:left;
            
}

#nav ul li a{
        text-decoration:none;
        text-align: center;
        height:40px;
        width:190px;
        margin-left:20px;
        font-size: 20px;
        font-family: Arial;
        display:block;
        line-height: 40px;
        color: #333;
}

#nav ul li a:hover{
        background: #666;
        color:#f4f4f4;
}

#navbar nav{
    //border:1px solid #f00;
    width: 150px;
    height: 300px;
    
}
#navbar ul{
         border:1px solid #333;
        list-style:none;
        background: #f4f4f4;
        width:100px;
        margin: 0 auto;
        height:250px;
        
        
}
#navbar ul li{
       // border:1px solid #f00;
        margin-left: -40px;
        width: 140px;
}
#navbar ul li a{
        text-decoration: none;
        display:block;
        height: 40px;
        padding: 10px;
        text-align:center;
        line-height:40px;
        color:#333;
        font-size: 18px;
        font-family: Arial;

        

        
}
#navbar ul li a:hover{
        background: #666;
        color:#f4f4f4;
}

  </style>


</head>
<body class="all">
<header class="all">
      <h2>Seja bem vindo!!!</h2>
      <hr>
     <nav id="nav">
       <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Inserir Noticia</a></li>
          <li><a href="">Comentarios</a></li>

       </ul>
    </nav>
</header>

<section class="all" id="navbar">

     <nav>
       <ul>
          <li><a href="#">Alterar</a></li>
          <li><a href="#">Excluir</a></li>
          <li><a href="#">Permitir</a></li>

       </ul>
    </nav>
 
</section>








</body>
</html>
