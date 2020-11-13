<?php 
ob_start();
session_start();



//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//ini_set('error_reporting', E_ALL);

/**
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 09:00:30
*/


# 
# REQUIRES OBRIGATORIOS
#


require('../classes/gestor.php');

#
# INSTANCIA DE OBJETOS OBRIGATORIAS
#



$util = new Util();


$gestor   = new Gestor();    

#
# TRATAMENTO DE INJECTION
#

	
$_POST = $util->validaParametro($_POST);
$_GET  = $util->validaParametro($_GET);


extract($_POST);



$obj = $gestor->retornarPessoas($email,'email');



	
if ($obj) {
	if ($obj->senha == $util->encripty($senha)) {
		$_SESSION['ENCONTRAPET_codigo']= $obj->id; // codigo pessoa
		$_SESSION['ENCONTRAPET_nome']  = $obj->nome;
		$_SESSION['ENCONTRAPET_email'] = $obj->email;
		die("1");				
	} else {
		die('0');	
	}
} else {
	die("0");	
}

		

?>
