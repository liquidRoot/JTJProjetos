<?php
session_start();

switch($_SESSION['tipo_usuario']){

	case 'usuario':
		include "sessao.php";
		include "barUsuario.html";
		include "includeFooter.php";
		break;

	default:
		include "includeHeader.php";
		echo "Area Restrita para Usuarios" . 
		"<a href='index.php'>Voltar</a>";
		include "includeFooter";
		session_destroy();
		break;
}
?>