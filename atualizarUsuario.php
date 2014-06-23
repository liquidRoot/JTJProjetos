<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();


$atualizarNome = $_POST["usuario"];
$atualizarLogin = $_POST["login"];
$atualizarSenha = $_POST["senha"];
$atualizarTipo = $_POST ["tipoUsuario"];
$atualizarFuncao = $_POST["funcao"];


$insere = mysql_query("UPDATE usuario SET nome_usuario='".$atualizarNome."', senha = '".$atualizarSenha."', tipo_usuario='".$atualizarTipo."', funcao='".$atualizarFuncao."' WHERE login='".$atualizarLogin."'");

include "includeHeader.php";
include "barAdmin.html";

if (!$insere) {
	echo "Falha ao alterar os dados! <br><br>" ;
}

else {
	echo "Dados alterados com sucesso! <br><br>" ;
}

include "includeFooter.php";
mysql_close($conexao);

?>