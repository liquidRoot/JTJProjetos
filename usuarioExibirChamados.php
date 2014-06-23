<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();



$postLogado = $_SESSION["login"];


$query = mysql_query("SELECT * FROM ocorrencias WHERE login_chamado LIKE '%".$postLogado."%' ");

include "includeHeader.php";
include "barUsuario.html";

if (mysql_num_rows($query) == 0) {

	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	echo "Erro 02: Sem resultados para a busca! <br><br>",
	"<a href='index.php')'> Voltar </a>";
exit;
}// senão ouver resultados

else{

	echo 
	"<table border='1'>" .
	"<th>" . 
	"<th>Nº do chamado</th>" . 
	"<th>Data do Chamado</th>".
	"<th>Descrição do Chamado</th>".
	"</th>"
	;



	while($exibe = mysql_fetch_array($query))
	{
		echo		
		"<tr>" . 
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["data_ocorre"] . "</td>" . 
		"<td>" . $exibe["descr_ocorre"] . "</td>" . 

		"</tr>"
		;
	}// fechando o while

} //Fechando o else
echo "</table>";

include "includeFooter.php"
?>