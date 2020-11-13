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

$_POST = $util->validaParametro($_POST);

extract($_POST);

# 
# VARIAVEIS  
# 

$senha = $util->encripty($senha);	

$objeto = array(array(id=>$id,nome=>$nome,email=>$email,face_id=>$face_id,telefone=>$telefone,especies_interesses=>$especies_interesses,senha=>$senha));


$obj = $gestor->inserirPessoas($objeto);		
if ($obj){
		$_SESSION['ENCONTRAPET_codigo']= $obj; // codigo pessoa
		$_SESSION['ENCONTRAPET_nome']  = $nome;
		$_SESSION['ENCONTRAPET_email'] = $email;
		die('1');
} else {
		die('0');
}	

	
?>
