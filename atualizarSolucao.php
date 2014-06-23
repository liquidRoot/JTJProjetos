<?php

include "files/conectaDB.php";
error_reporting(0);
	session_start();

$postNewSolucao = $_POST["newSolucao"];

$atualizarSolucao= $_POST["novaDescr"];
$atualizarSituacao = $_POST["situacaoNova"];
$atualizarDescr = $_POST["novaSituacao"];



$insere = mysql_query("UPDATE solucao SET descr_solucao='".$atualizarSolucao."', situacao = '".$atualizarSituacao."', descr_situacao='".$atualizarDescr."' WHERE num_solucao='".$postNewSolucao."'");


include "includeHeader.php";
include "barSuporte.html";

if (!$insere) {
echo "Falha ao alterar os dados! <br><br>" ;
}

else {
echo "Dados alterados com sucesso! <br><br>" ;
}

include "includeFooter.php";
mysql_close($conexao);

?>