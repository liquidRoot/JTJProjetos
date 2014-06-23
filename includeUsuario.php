<?php
include "files/conectaDB.php";
error_reporting(0);
session_start();

$postUsuario = $_POST["usuario"];
$postLogin = $_POST["login"];
$postSenha = $_POST["senha"];
$postTipo = $_POST["tipoUsuario"];
$postFuncao = $_POST ["funcao"];

$insert = mysql_query("INSERT INTO usuario(nome_usuario,login,senha,tipo_usuario,funcao) VALUES ('$postUsuario','$postLogin','$postSenha','$postTipo','$postFuncao') ");



include "includeHeader.php";

include "barAdmin.html";

if (!$insert) {
	
	echo "Erro <br><br>" ;

}
else{
	
	
	echo "Sucesso <br><br>" ;
}



include "includeFooter.php";
mysql_close($conexao);

?>

