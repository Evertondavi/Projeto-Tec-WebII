 
 	<!-------FORMULÁRIO CONTATO---------->
 
 <form class="forum" action="admin/insertCom.php"  enctype="multipart/form-data" method="post" >
            <input type="text" name="nome" maxlength="100" placeholder ="Nome Completo" class="inpForum" />
			<input type="text" name="email" maxlength="100" placeholder ="E-mail" class="inpForum" />
			<input type="text" name="telefone" maxlength="100" placeholder ="Telefone" class="inpForum" />
			<textarea type="text" name="coment" cols="30" rows="10" placeholder ="Deixe sua dúvida!!!" class="inpForum"></textarea><br />
			<input type="hidden" name="acao" value="enviar" />
			<input type="submit"value="Enviar" class="subForum"/>
        </form>  