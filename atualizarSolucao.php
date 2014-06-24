<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();

//$insere = mysql_query("UPDATE solucao SET descr_solucao='".$atualizarSolucao."', situacao = '".$atualizarSituacao."', 
//						descr_situacao='".$atualizarDescr."' WHERE num_solucao='".$postNewSolucao."'");
$insere = $conexao->prepare("UPDATE solucao SET descr_solucao = ':descrSolucao', situacao = ':situacao', descr_situacao = ':descrSituacao', WHERE num_solucao =':novaSituacao'")

$novaSituacao = filter_var($_POST["newSolucao"]);
$descrSolucao = filter_var($_POST["novaDescr"]);
$situacao = 	filter_var($_POST["situacaoNova"]);
$descrSituacao =filter_var($_POST["novaSituacao"]);

$insere = bindParam(':novaSituacao',$novaSituacao);
$insere = bindParam(':descrSolucao',$descrSolucao);
$insere = bindParam(':situacao', 	$situacao);
$insere = bindParam(':descSituacao',$descSituacao);



include "includeHeader.php";
include "barSuporte.html";

if ($insere->execute()) {
	echo 
	"<div id='msgOK' title=''>" . 
		"<p>
			<span class='ui-icon-alert' style='float: left; margin: 0px 8px 0px 8px;'></span>
		</p>" . 
		"<p>
			Dados Atualizados com Sucesso.
		</p>>"
	"</div>" ;
}

else {
	echo "Falha ao alterar os dados! <br><br>" ;
}

include "includeFooter.php";

//mysql_close($conexao);

?>