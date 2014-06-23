<?php
include "files/conectaDB.php";
error_reporting(0);
session_start();

$postLogado = $_SESSION["login"];

$postNumSolucao = $_POST["numChamadoSolucao"];
$postSolucao = $_POST["descr_solucao"];
$postSituacao = $_POST["situacao"];
$postDescSolucao = $_POST["descr_situacao"];
$postNumAtende = $_POST["numAtendeSolucao"];

	

$insert = mysql_query("INSERT INTO solucao(num_chamado,data_solucao,login_atendimento,descr_solucao,situacao,descr_situacao,num_atendimento)
	 VALUES ('$postNumSolucao',NOW(),'$postLogado','$postSolucao','$postSituacao','$postDescSolucao','$postNumAtende') ");
	


include "includeHeader.php";

include "barSuporte.html";

if (!$insert) {
	
	echo "Erro <br><br>" ;

}
else{
	
	
	echo "Sucesso <br><br>" ;
}



include "includeFooter.php";
mysql_close($conexao);

?>

