<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();


$query = mysql_query("SELECT * FROM atendimento");
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
	"<a href='index.php')'> Voltar </a>";
}// senao houver resultado

else{

	echo "<table border='1'>" .
	"<th>" .
	"<th>Numero Chamado</tr>" .
	"<th>Data</tr>" .
	"<th>Modulo Sistema</tr>" .
	"<th>Situação</tr>".
	"<th>Descrição do Atendimento</tr>" .
	"<th>Data Encerramento</tr>" .
	"<th>Prioridade</tr>" .
	"<th>Numero Atendimento</tr>" .
	"</th>";

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

	}//fechando while
}// fechando o else

echo "</table>";

include "includeFooter.php"
?>