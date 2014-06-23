<?php
include "includeHeader.php";
?>


<section id="formularioUsuarioConsultando" class='formulario'>

	<h1>Consultar Atendimento</h1>

	<form id="buscarAtendimento" name="buscarAtendimento" class="atendimento" method="post" action="buscarAtendimento.php">
		
		<p>
			<label> Chamado a Ser Consultado</label>
			<input id="buscarAtendimento" name="buscarAtendimento" type="text" placeholder="Numero do Chamado a Consultar Atendimento" required="required"/>
		</p>
		
		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		


	</form>

</section>



<?php
include "includeFooter.php";
?>