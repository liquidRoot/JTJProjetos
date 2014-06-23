<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();

$carregaLogin  =  $_POST["login"];
$carregaSenha =  $_POST["senha"];

	//aqui comeca a porra
$logar = mysql_query("SELECT login, nome_usuario, senha, tipo_usuario FROM usuario WHERE login='" . $carregaLogin . "' AND senha='" . $carregaSenha. "' LIMIT 1");
$resultadoQuery = mysql_fetch_assoc($logar);

	//nao achou nada OR mais de um usuario
if (mysql_num_rows($logar) != 1){

	session_destroy();
	unset($_SESSION['login']);
	unset($_SESSION['senha']);

	echo "Erro 01: Usuário ou senha incorreto! <br><br>" .
	"<a href='index.php')'> Voltar </a>";

}

	//aqui deve estar certo
else{

	$_SESSION["login"] = $resultadoQuery['login'];
	$_SESSION["nome_usuario"] = $resultadoQuery['nome_usuario'];
	$_SESSION["tipo_usuario"] = $resultadoQuery['tipo_usuario'];

	switch ($_SESSION['tipo_usuario']) {
		case 'admin':
		header("Location:restritoAdmin.php");
		break;

		case 'suporte':
		header("Location:restritoSuporte.php");
		break;

		case 'usuario':
		header("Location:restritoUsuario.php");
		break;


		default:
		include 'includeHeader.php';
		echo "'You Shall Not PASS!'<br><br>" .
		"<a href='index.php')'> Voltar </a>";

#limpando....
session_destroy();
unset($_SESSION['login']);
unset($_SESSION['senha']);

		include "includeFooter.php";
		break;
	}

}


?>