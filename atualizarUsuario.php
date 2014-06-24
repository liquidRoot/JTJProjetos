<?php

include "files/conectaDB.php";
error_reporting(0);
session_start();


//$insere = mysql_query("UPDATE usuario SET nome_usuario='".$atualizarNome."', senha = '".$atualizarSenha."', tipo_usuario='".$atualizarTipo."', funcao='".$atualizarFuncao."' WHERE login='".$atualizarLogin."'");

$insere = $conexao->prepare("UPDATE usuario 
		SET nome_usuario = ':usuario', senha = ':senha', tipo_usuario = ':tipo', funcao = ':funcao' 
		WHERE login = ':login'")


$nomeUsuario = 		filter_var($_POST["usuario"]);
$loginUsuario = 	filter_var($_POST["login"]);
$senhaUsuario = 	filter_var($_POST["senha"]);
$tipoUsuario 	= 	filter_var($_POST ["tipoUsuario"]);
$funcaoUsuario = 	filter_var($_POST["funcao"]);

$insere = bindParam(':usuario', $nome_usuario);
$insere = bindParam(':senha', 	$senhaUsuario);
$insere = bindParam(':tipo', 	$tipoUsuario);
$insere = bindParam(':funcao',	$funcaoUsuario);
$insere = bindParam(':login', 	$loginUsuario);


include "includeHeader.php";
include "barAdmin.html";

if ($insere->execute()) {
	echo "Dados alterados com sucesso! <br><br>" ;
}

else {
	echo "Falha ao alterar os dados! <br><br>" ;
}

include "includeFooter.php";

//mysql_close($conexao);

?>