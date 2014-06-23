<?php
include "files/conectaDb.php";
error_reporting(0);
session_start();



$postLogado = $_SESSION["login"];
$postChamado = $_POST["num_chamado"];
$postModulo = $_POST["modulo_sistema"];
$postSituacao = $_POST["situacao"];
$postAssunto = $_POST["assunto"];
$postAtendimento = $_POST["descr_atendimento"];
$postEncerramento = $_POST["data_encerramento"];
$postPrioridade = $_POST["prioridade"];

$inserindoAtendimento = mysql_query("INSERT INTO atendimento(num_chamado, data, modulo_sistema, situacao, assunto, descr_atendimento,
									data_encerramento,prioridade) VALUES ('$postChamado', NOW(), '$postModulo', '$postSituacao',
									'$postAssunto','$postAtendimento','$postEncerramento', '$postPrioridade')");


include "includeHeader.php";

include "barSuporte.html";

if (!$inserindoAtendimento) {
	
	echo "Erro <br><br>" ;

}
else{
	
	
	echo "Sucesso <br><br>" ;
}



include "includeFooter.php";
mysql_close($conexao);

?>