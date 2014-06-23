<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();


$query = mysql_query("SELECT * FROM solucao");

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

	echo 
	"<table border='1'>" .
	"<th>" . 
	"<th>Nº do Shamado</th>" . 
	"<th>Data da Solução</th>".
	"<th> Atendente </th>".
	"<th>Descrição da Solução</th>" . 
	"<th>Situação Atual</th>".
	"<th> Descrição da Situção </th>".
	"<th>Nº do Atendimento</th>" . 
	"<th>Nº da Solução</th>".
	"</th>";

	while($exibe = mysql_fetch_array($query))
	{
		echo		
		"<tr>" . 
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["data_solucao"] . "</td>" . 
		"<td>" . $exibe["login_atendimento"] . "</td>" . 
		"<td>" . $exibe["descr_solucao"] . "</td>" .
		"<td>" . $exibe["situacao"] . "</td>" . 
		"<td>" . $exibe["descr_situacao"] . "</td>" . 
		"<td>" . $exibe["num_atendimento"] . "</td>" .
		"<td>" . $exibe["num_solucao"] . "</td>" .  
		"</tr>";
	}//fechando while
}// fechando o else

echo "</table>";

include "includeFooter.php"
?>