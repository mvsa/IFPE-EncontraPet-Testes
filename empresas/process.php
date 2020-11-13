<?php 
ob_start();
session_start();

/**
*	@autor Marcos
*	@version 31-01-2020 as 09:00:30
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



		$obj = $gestor->retornarEmpresas($email,'email');
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
