<?php

	if ($_SESSION['tipoUsuario'] == "admin") {
		header("Location:restritoAdmin.php");
	}
	elseif ($_SESSION['tipoUsuario'] == "suporte") {
		header("Location:restritoSuporte.php");
	}
	elseif ($_SESSION['tipoUsuario'] == 'usuario'){
		header("Location:restritoUsuario.php");
	}
	else{
		header("Location:index.php");
	}

?>