<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();



$postLogado = $_SESSION["login"];


$query = mysql_query("SELECT 'num_chamado', 'login_chamado', 'data_ocorre', 'descr_ocorre' FROM ocorrencias  ORDER BY 'data_ocorre' DESC LIMIT 30 WHERE login_chamado LIKE '%".$postLogado."%' ");

include "includeHeader.php";
include "barUsuario.html";


// senão ouver resultado

if (mysql_num_rows($query) == 0) {

	echo "Erro 02: Sem resultados para a busca! <br><br>";
	
	include 'includeFooter';
exit;
}


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

} //Fechando o else,
echo "</table>";

include "barUsuario.html";
include "includeFooter.php";
?>