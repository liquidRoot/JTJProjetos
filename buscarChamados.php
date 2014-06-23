<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();


$buscarOcorrencias = $_POST["buscarOcorrencias"];

$query = mysql_query ("SELECT * FROM ocorrencias WHERE num_chamado LIKE '%".$buscarOcorrencias."%'"); 

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
	"<th>" .
	"<th>Número do Chamado</th>" .
	"<th>Login Solicitante</th>" .
	"<th>Data do Chamado</th>".
	"<th>Descrição do Chamado</th>" .
	"</th>";

	while($exibe = mysql_fetch_array($query)) {

		echo "<tr>" .
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["login_chamado"]   . "</td>" .
		"<td>" . $exibe ["data_ocorre"] . "</td>".
		"<td>" . $exibe ["descr_ocorre"] . "</td>".
		"</tr>";
	}
}

echo "</table>";

include "includeFooter.php";
mysql_close($conexao);

?>