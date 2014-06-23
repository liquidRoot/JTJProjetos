<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();

$buscarAtendimento = $_POST["buscarAtendimento"];

$query = mysql_query ("SELECT * FROM atendimento WHERE num_chamado LIKE '%".$buscarAtendimento."%'"); 


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
	
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	echo "Erro ao carregar Menu <br><br>" .
	"<a href='index.php'> Voltar </a>";
}


if (mysql_num_rows($query) == 0) {
	
	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	echo "Erro 02: Sem resultados para a busca! <br><br>",
	"<a href='restritoUsuario.php')'> Voltar </a>";
}



else{

	echo "<table border='1'>" .
	"<th>Numero Chamado</th>" .
	"<th>Data</th>" .
	"<th>Modulo Sistema</th>" .
	"<th>Situação</th>".
	"<th>Descrição do Atendimento</th>" .
	"<th>Data Encerramento</th>" .
	"<th>Prioridade</th>" .
	"<th>Numero Atendimento</th>";

	while($exibe = mysql_fetch_array($query)) {

		echo "<tr>" .
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["data"]   . "</td>" .
		"<td>" . $exibe["modulo_sistema"]  . "</td>" .
		"<td>" . $exibe ["situacao"] . "</td>".
		"<td>" . $exibe ["assunto"] . "</td>".
		"<td>" . $exibe ["descr_atendimento"] . "</td>".
		"<td>" . $exibe ["data_encerramento"] . "</td>".
		"<td>" . $exibe ["prioridade"] . "</td>".
		"<td>" . $exibe ["num_atendimento"] . "</td>".
		"</tr>";

	}

	echo "</table>";

}	
include "includeFooter.php";

mysql_close($conexao);
?>
