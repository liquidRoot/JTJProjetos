<?php
include "includeHeader.php";
include 'files/conectaDB.php';

//$consulta = mysql_query("SELECT * FROM usuarios");
//$exibir = mysql_fetch_array($consulta);

$exibir = $conexao->query("SELECT * FROM usuarios")->fetchAll();
if(!exibir){
	print_r($conexao->errorInfo);
}
?>


<section id="formularioBusca">

	<h1>Consultar Usuario</h1>
<!--
	<form id="buscarUsuario" name="buscarUsuario" class="usuario" method="post" action="buscarUsuario.php">
		
		<p>
			<label> Login a ser Consultado</label>
			<input id="buscarUsuario" name="buscarUsuario" type="text" placeholder="Login a Consultar" required="required"/>
		</p>

		
		<p>
			<input id="submit" name="submit" type="submit" value="Enviar"/>	
		</p>

	</form>
-->
<table>
	<th>Codigo Usuario</th>
	<th>Login</th>
	<th>Nome do Usuario</th>
	<th>Função</th>
	<th>Tipo de Usuario</th>

	<?php
	while ($exibir){

		echo "<tr>" .
		"<td>" . $exibir['cod_usuario'] . "</td>" .
		"<td>" . $exibir['login'] . "</td>" .
		"<td>" . $exibir['nome_usuario'] . "</td>" .
		"<td>" . $exibir['funcao'] . "</td>" .
		"<td>" . $exibir['tipo_usuario'] . "</td>" .
		"<td> <a href='adminAtualizando.php?codigo=" . $consulta[''] . ">Editar</a>"
		"</tr>";
	}

	?>
</table>
</section>



<?php
include "includeFooter.php";
?>