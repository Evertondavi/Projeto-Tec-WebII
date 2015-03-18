<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <title>Cadastro de Psicólogos</title>
        </head>
        <body>
   
<h1> Cadastro de Psicólogos </h1> 

 <form name="cadastro" method="post" action="cadastro.php">
 <h3>Nome:</h3><input type="text" name="Nome"/>
 <h3>Sobrenome:</h3><input type="text" name="Sobrenome"/>
 <h3>Senha:</h3><input type="password" name="Senha" size="10" maxlength="10"/>
 <h3>Confirmar senha:</h3><input type="password" name="Senha" size="10" maxlength="10"/>
 <h3>E-mail:</h3><input type="email" name="E-mail"/>
 <h3>Sexo:</h3> <input type="radio" name="sexo" value="Masculino"/>Masculino<input type ="radio" name="sexo" value="Feminino"/>Feminino
 <br></br>
 <h3>Ano da Faculdade:</h3><input type="radio" name="Ano da Faculdade" value="1º Ano"/>1º Ano<input type="radio" name="Ano da Faculdade" value="2º Ano"/>2º Ano
 <input type="radio" name="Ano da Faculdade" value="3º Ano"/>3º Ano<input type="radio" name="Ano da Faculdade" value="4º Ano"/>4º Ano
 <input type="radio" name="Ano da Faculdade" value="5º Ano"/>5º Ano
 <br></br>
 <input type="submit" name="registrar" value="Registrar"/> 

 </body>
 </html>
