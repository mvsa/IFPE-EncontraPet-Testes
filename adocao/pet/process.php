<?php 
ob_start();
session_start();
/**
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 12:06:55
*/



# 
# REQUIRES OBRIGATORIOS
#

require('../../classes/gestor.php');

$util = new Util();
$gestor   = new Gestor();

#
# TRATAMENTO DE INJECTION
#

$_GET = $util->validaParametro($_GET);

extract($_GET);

# 
# VARIAVEIS  
# 

$senha = $util->encripty($senha);	

$objeto = array(array(id_pets=>$pet,id_pessoas=>$_SESSION['ENCONTRAPET_codigo'],data_hora=>date('Y-m-d H:i:s')));

//var_dump($objeto);
//die;
$obj = $gestor->inserirInteracoesPets($objeto);		
if ($obj){		
		die('1');
} else {
		die('0');
}	

	
?>
