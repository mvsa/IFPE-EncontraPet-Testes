<?php 
ob_start();
session_start();
/**
*
*	@autor Marcos Vinícios da Silva Arcanjo <marcosniv@gmail.com>
*	@version 28-01-2020 as 23:15:00
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
//Marcos
//No banco tipo_empresa  senha
$objeto = array(array(id=>$id,id_tipos=>$tipo_empresa,nome=>$nome,email=>$email,responsavel=>$responsavel,telefone=>$telefone,especies_atendidas=>$visualizar,senha=>$senha,face_id=>$face_id));
$obj = $gestor->inserirEmpresas($objeto);				
 if ($obj){
		$novaEmpresa = $gestor->retornarEmpresas($email,'email');
		if($novaEmpresa){
// 			//$_SESSION['ENCONTRAPET_codigo']= $novaEmpresa->id;
// 			//$_SESSION['ENCONTRAPET_nome']  = $obj->nome;
// 			//$_SESSION['ENCONTRAPET_email'] = $obj->email;
// 			//var_dump($novaEmpresa); // Objeto retornado do método retornarEmpresa está trazendo todas as Empresas
 			die('1');
 		}else{
 			die('0');
 		}
	  } else {
  			die('0');
 }	

	
?>


