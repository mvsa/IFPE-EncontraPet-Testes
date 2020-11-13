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

require('../classes/gestor.php');
require('../classes/util/Zebra_Image.php');
$util = new Util();
$gestor   = new Gestor();
$image = new Zebra_Image();

#
# TRATAMENTO DE INJECTION
#

$_POST = $util->validaParametro($_POST);


extract($_POST);
extract($_GET);

# 
# VARIAVEIS  
# 

//var_dump($_POST);
$diretorio = "../uploads/pet/";
$diretorioTmp = "../uploads/tmp/";

$arquivo = $_FILES['arquivo'];

switch ($operacao) {
	
	case 'inserir':			

			if($imagem){ // se existe imagem

				$objeto = array(array(id_pessoas=>$_SESSION['ENCONTRAPET_codigo'],id_especies=>$id_especies, nome=>$nome , descricao=>$descricao, sexo=>$sexo,castrado=>$castrado, idade=>$idade, id_status=>1, vacinado=>$vacinado, vermifugado=>$vermifugado, estado=>urldecode($estado), municipio=>urldecode($municipio), bairro=>urldecode($bairro)));	
				//die(var_dump($objeto));			
				
				$imagem = trim($imagem);							
				$arrArq = explode('.',$imagem);
				
				rename($diretorioTmp.$imagem,$diretorio.$imagem);		
				
				$caminho = $diretorio . $imagem; // upload caminho do arquivo enviado	

				// indicate a source image
				$image->source_path = $caminho;
				
				
				$ext = substr($image->source_path, strrpos($image->source_path, '.') + 1);

				// indicate a target image
				$image->target_path = $diretorio.$arrArq[0].'M.' . $ext;
						
				//die($image->target_path . "<<");
				
				// resize
				// and if there is an error, show the error message
				if (!$image->resize(800, 800, ZEBRA_IMAGE_NOT_BOXED, -1)) { 					
					show_error($image->error, $image->source_path, $image->target_path);														
				} 						
				chmod ( $image->target_path, 0777);
				
				
				
				
				$obj = $gestor->inserirPets($objeto); // insersao do arquivo principal
				
				
				if ($obj){	
					
					$data = date('Y-m-d');
					$hora = date('H:i:s');
					/*
					 * inserir imagem e movimentacao */
									
					$objeto1 = array(array(id_pets=>$obj, id_status=>1, data_hora=>$data . ' '. $hora));				
					$gestor->inserirMovimentacoesPets($objeto1); // insersao do tamanho											
					
					$objeto2 = array(array(id_pets=>$obj, legenda=>$nome, caminho=>$imagem, data=>$data));				
					$gestor->inserirFotos($objeto2); // insersao do tamanho											
					
					die('1');
				} else { // erro ao inserir o arquivo padrão			
					die('0');
				}
				
			}				
				

	break;

	case 'inserir_arquivo': /*  */

		$upload = $util->uploadGenerics($arquivo, $diretorioTmp);

		if(is_array($upload)){ // ocorreu erro no envio retorno array de erros
			$erro = $upload; 	
			
			die('0');	
		} else {
			$caminho = $upload; // upload caminho do arquivo enviado											
			die($caminho);	
		}	
	
	break;		
}	
?>
