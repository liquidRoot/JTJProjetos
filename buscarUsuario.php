<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();


$buscarUsuario = $_POST["buscarUsuario"];

$query = mysql_query ("SELECT * FROM usuario WHERE login LIKE '%".$buscarUsuario."%'"); 

include "includeHeader.php";

switch ($_SESSION["tipo_usuario"]){
	case 'suporte':
	include "barSuporte.html";
	break;

	case 'usuario':
	include "barUsuario.html";
	break;

	case 'admin':
	include "barAdmin.html";
	break;

	default:
	echo "Erro ao carregar Menu <br><br>" .
	"<a href='index.php'> Voltar </a>";
}

if (mysql_num_rows($query) == 0) {
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);
	echo "Erro 02: Sem resultados para a busca! <br><br>",
	"<a href='index.php')'> Voltar </a>";

}
else{

	echo "<table border='1'>" .
	"<tr>" .
	"<td>Nome Usuario</td>" .
	"<td>Login</td>" .
	"<td>Tipo Usuario</td>".
	"<td>Função</td>" .
	"</tr>";

	while($exibe = mysql_fetch_array($query)) {

		echo "<tr>" .
		"<td>" . $exibe["nome_usuario"] . "</td>" .
		"<td>" . $exibe["login"]   . "</td>" .
		"<td>" . $exibe ["tipo_usuario"] . "</td>".
		"<td>" . $exibe ["funcao"] . "</td>".
		"</tr>";
	}

	echo "</table>";

}

include "includeFooter.php";

mysql_close($conexao);

?>
