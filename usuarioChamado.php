<?php
include "includeHeader.php";
?>


<section id="formulario" class='formulario'>

	<h1>Chamado</h1>

	<form id="chamado" name="chamado" class="chamado" method="post" action="includeChamado.php">

		<p>
			<label>Descrição do Chamado</label></br>
			<textarea id="descricaoChamado" name="descricaoChamado" rows="8" cols="1" placeholder="Descreva qual é o motivo do seu chamado, da forma mais clara possivel" required="required" maxlenght="250"/></textarea>
		</p>
		
		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>

	</form>

</section>



<?php
include "includeFooter.php";
?>