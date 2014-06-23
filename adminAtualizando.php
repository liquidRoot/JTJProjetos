<?php
include "includeHeader.php";
include "files/conectaDB.php";

$codigoUsuario = $_GET['codigoUsuario'];

$Nome = $exibir["usuario"];
$Login = $exibir["login"];
$Senha = $exibir["senha"];
$Funcao = $exibir["funcao"];


$exibir = $conexao->query("SELECT "nome das tables" FROM usuarios WHERE "codigo"="$codigoUsuario"");
//$exibir = mysql_query(SELECT "nome das tables" FROM usuarios WHERE "codigo"="$codigoUsuario");

if(!$exibir){
	print_r($conexao->errorInfo());
}
?>


<section id="formularioAtualizar">

	<h1>Atualizar Usuario</h1>

	<form id="atualizarUsuario" name="atualizarUsuario" class="usuario" method="post" action="atualizarUsuario.php">
		
		<p>
			<label>Login do Usuario a ser Atualizado</label>
			<input id="login" name="login" type="text" placeholder="<?php $Login?>" required="required"/>
		</p>

		<p>
			<label>Nome do Usuario</label>
			<input id="usuario" name="usuario" type="text" placeholder="<?php $Nome?>" required="required"/>
		</p>

		<p>
			<label>Senha</label>
			<input id="senha" name="senha" type="password" placeholder="<?php $Senha?>" required="required"/>
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
			<input id="funcao" name="funcao" type="text" placeholder="<?php $Funcao?>" required/> 
		</p>
		
		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>
		
	</form>

</section>



<?php
include "includeFooter.php";
?>