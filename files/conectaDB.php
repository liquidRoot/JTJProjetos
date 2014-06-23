<?php
	$servidor	= "127.0.0.1";
	$usuario	= "root";
	$senha		= "";
	$banco		= "pi";
	
	//convencão seguranca PDO pra conexão com DB
	//PDO('nome do SGBD':host='endereço doservidor';dbname='nome do DB' , "UserName" , "Senha")

	$conexao = new PDO("mysql:host=127.0.0.1;dbname=pi","root","");
	
	if(!$conexao){
		die('Erro com a conexao do banco de dados');
	}
	
	//$conexao = mysql_connect($servidor, $usuario, $senha); 
				//mysql_select_db($banco);
?>