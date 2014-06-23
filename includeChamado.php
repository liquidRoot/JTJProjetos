<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();


$seuChamado = $_SESSION["num_chamado"];
$postLogado = $_SESSION["login"];

$postOcorrencia = $_POST["descricaoChamado"];

date_default_timezone_set('America/Sao_Paulo');

$insert = mysql_query("INSERT INTO ocorrencias(login_chamado,data_ocorre,descr_ocorre) VALUES ('$postLogado',NOW(),'$postOcorrencia') ");


include "includeHeader.php";

include "barUsuario.html";


if (!$insert) {
	
	echo "Erro <br><br>" ;

}
else{
	
	echo "Sucesso <br><br> "  ;

}


include "includeFooter.php";
mysql_close($conexao);
?>