<?php
session_start();

if(isset($_SESSION["login"]) != "true") {
	include 'includeHeader.php';
	echo "<a><img src='img/youShallNotPass.png' width='88%'/></a><br><br>";

	#limpando....
	unset($_SESSION["tipo_usuario"]);
	unset($_SESSION["login"]);
	unset($_SESSION["senha"]);
	session_destroy();
	
	include "includeFooter.php";

	exit;
}

else{
	include 'includeHeader.php';
	echo "Bem vindo " . $_SESSION["nome_usuario"] . ", " . $_SESSION["tipo_usuario"] . " deste sistema unicamente e especialmente unico";
}

?>