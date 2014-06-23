<?php
include "includeHeader.php";
?>


<section id="formularioExclusao">

	<h1>Excluir Usuario</h1>

	<form id="deleteUsuario" name="deleteUsuario" class="usuario" method="post" action="deleteUsuario.php">
		
		<p>
			<label> Login a ser Excluido</label>
			<input id="excluirUsuario" name="excluirUsuario" type="text" placeholder="Login a Excluir" required="required"/>
		</p>

		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>

	</form>

</section>


<?php
include "includeFooter.php";
?>