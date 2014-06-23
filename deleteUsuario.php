<?php
include "files/conectaDB.php";

error_reporting(0);
session_start();


$excluirLinha = $_POST["excluirUsuario"]; 

$delete = mysql_query("DELETE FROM usuario WHERE login='" . $excluirLinha . "'"); 

include "includeHeader.php";
include "barAdmin.html";

if(!$delete){
	echo "erro ao deletar <br><br>";
}

else{
	echo "Registro excluído com sucesso! <br><br>";
}

mysql_close($conexao);

include "includeFooter.php";
?>