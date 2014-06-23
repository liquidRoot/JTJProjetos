<?php
session_start();

switch ($_SESSION["tipo_usuario"]){

	case 'admin':
	
		include "sessao.php";
		include "barAdmin.html";
		include "includeFooter.php";

	break;

	default:
	
		include "includeHeader.php";
		
		echo "area restrita para administradores" . 
		"<a href='index.php'> Voltar </a>";
		
		include "includeFooter.php";
		
		session_destroy();
		
	break;
}

?>