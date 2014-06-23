<?php
include "sessao.php";

switch ($_SESSION['tipo_usuario']) {

	case 'suporte':

		include "files/conectaDB.php";
		include "barSuporte.html";

		$chamadosAbertos = mysql_query("SELECT * FROM atendimento WHERE situacao='aberto'");

		if(mysql_num_rows($chamadosAbertos) == 0){
			echo "sem nada novo pra fazer, hora de upar os pokemon!";

		}

		else{
			echo "<h1>Chamados em Aberto</h1>" .
			"<table border='1'>" .
			"<th>Numero Chamado</th>" .
			"<th>Numero Atendimento</th>" .
			"<th>Data</th>" .
			"<th>Modulo</th>" .
			"<th>Situação</th>".
			"<th>Assunto</th>" .
			"<th>Prioridade</th>" ;

			while ($exibe = mysql_fetch_array($chamadosAbertos)) {
				echo "<tr>" .
				"<td>" . $exibe["num_chamado"] . "</td>" .
				"<td>" . $exibe ["num_atendimento"] . "</td>".
				"<td>" . $exibe["data"]   . "</td>" .
				"<td>" . $exibe["modulo_sistema"]  . "</td>" .
				"<td>" . $exibe ["situacao"] . "</td>".
				"<td>" . $exibe ["assunto"] . "</td>".
				"<td>" . $exibe ["prioridade"] . "</td>".
				"</tr>";
			}
			echo "</table>";
		}

		include "includeFooter.php";
	break;
	


	default:

		include "includeHeader.php";
		
		echo "area restrita para o Suporte" . 
		"<a href='index.php'> Voltar </a>";
		
		include "includeFooter.php";
		
		session_destroy();
		
		break;
}

?>