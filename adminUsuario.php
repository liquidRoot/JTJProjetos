<?php
include "includeHeader.php";
?>


<section id="formularioUsuario">

	<h1>Cadastrar Usuario</h1>

	<form id="includeUsuario" name="includeUsuario" class="usuario" method="post" action="includeUsuario.php">
		
		<p>
			<label>Nome do Usuario</label>
			<input id="usuario" name="usuario" type="text" placeholder="nome usuario" required="required"/>
		</p>

		<p>
			<label>Login</label>
			<input id="login" name="login" type="text" placeholder="Crie o Login" required="required"/>
		</p>

		<p>
			<label>Senha</label>
			<input id="senha" name="senha" type="password" placeholder="Crie uma Senha: minimo de 5 caracteres" required="required" minlength="5" />

		</p>

		<p>
			<label>Tipo de Usuario</label>
			<select id="tipoUsuario" name="tipoUsuario">
				<option value="admin">admin</option>
				<option value="suporte">suporte</option>
				<option value="usuario">usuario</option>

			</select>

		</p>

		<p>
			<label>Função</label>
			<input id="funcao" name="funcao" type="text" placeholder="Função especifica do colaborador"/> 
		</p>

		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		


	</form>

</section>



<?php
include "includeFooter.php";
?>