<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();


$query = mysql_query("SELECT * FROM ocorrencias");

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

	echo "Erro 02: Sem Chamados Cadastrados! <br><br>",
	"<a href='index.php')'> Voltar </a>";

}// senao houver resultado

else{

	echo 
	"<table border='1'>" .
	"<th>" . 
	"<th>Nº do chamado</th>" . 
	"<th>Login do Funcionario</th>".
	"<th> Descrição do Chamado </th>".
	"</th>";

	while($exibe = mysql_fetch_array($query))
	{
		echo		
		"<tr>" . 
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["login_chamado"] . "</td>" . 
		"<td>" . $exibe["descr_ocorre"] . "</td>" . 
		"</tr>";
	}//fechando while

}// fechando o else

echo "</table>";

include "includeFooter.php"
?>