<?php
include "files/conectaDB.php";
include "includeHeader.php";

$query = mysql_query("SELECT * FROM ocorrencias");


	echo 
		"<table border='1'>" .
		
		"<th>Nº do chamado</th>" . 
		"<th>funcionario</th>"
	;



while($exibe = mysql_fetch_array($query))
{
	echo		
		"<tr>" . 
		"<td>" . $exibe["num_chamado"] . "</td>" .
		"<td>" . $exibe["funcionario"] . "</td>" . 
		"</tr>"
	;
}

	echo "</table>";

include "includeFooter.php"
?>