<?php
include "files/conectaDB.php";

$postFuncionario = $_POST["funcionario"];
$postAssunto = $_POST["assunto"];
$postDescricao = $_POST["descricaoChamado"];
$dataChamado = date('Y-m-d');

$insert = mysql_query("INSERT INTO chamados(funcionario,assuntoChamado,descricaoChamado,dataChamado) VALUES ('$postFuncionario','$postAssunto','$postDescricao','dataChamado') ");



include "includeHeader.php";

if (!$insert) {
	#include "msgEnviarErro.php";
	echo "Erro";
}
else{
	#include "msgEnviarSucesso.html";
	#header("location:index.php");
	echo "Sucesso";
}



include "includeFooter.php";
mysql_close($conexao);

?>
