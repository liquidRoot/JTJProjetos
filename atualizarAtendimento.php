<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();
//$insere = mysql_query("UPDATE atendimento SET modulo_sistema='".$atualizarModulo."', situacao = '".$atualizarSituacao."',
//						 assunto='".$atualizarAssunto."', descr_atendimento='".$atualizarAtendimento."',
//						data_encerramento = '".$atualizarEncerramento."', prioridade='".$atualizarPrioridade."'	 WHERE num_atendimento='".$postAtendimento."'");

//prepare pra q a query não rode agora
$insere = $conexao->prepare(
	"UPDATE atendimento 
		SET (modulo_sistema, situacao, assunto, descr_atendimento, data_encerramento, prioridade) 
		VALUES (:moduloSistema, :situacao, :assunto, :descricaoAtendimento, :dataEncerramento, :prioridade)
		WHERE num_atendimento.':nAtendimento'"
	);


//filter_var -filtra os resultados
//(o filtro padrão é FILTER_SANITIZE_STRING que remove tags HTML)

$modulo_sistema = filter_var($_POST["modulo_sistema"]);
$situacao = filter_var($_POST["situacao"]);
$assunto = filter_var($_POST["assunto"]);
$descricaoAtendimento = filter_var($_POST["descr_atendimento"]);
$dataEncerramento = filter_var($_POST["data_encerramento"]);
$prioridade = filter_var($_POST["prioridade"]);
$nAtendimento = filter_var($_POST["num_atendimento"]);


//prepara variaveis para a query
$insere->bindParam(':moduloSistema',		$modulo_sistema);
$insere->bindParam(':situacao',				$situacao);
$insere->bindParam(':assunto',				$assunto);
$insere->bindParam(':descricaoAtendimento',	$descricaoAtendimento);
$insere->bindParam(':dataEncerramento',		$dataEncerramento);
$insere->bindParam(':prioridade', 			$prioridade);
$insere->bindParam(':nAtendimento',			$nAtendimento);

//---------------------------------------//
include "includeHeader.php";
include "barSuporte.html";
//-------------------------------------//

//agora executa a query lisinha
if ($insere->execute()) {
	echo "Dados alterados com sucesso! <br><br>" ; 
}

else {
	echo "Falha ao alterar os dados! <br><br>";
}

include "includeFooter.php";
mysql_close($conexao);

?>