<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@created 21-01-2020 as 10:16:17
*	@version 06-02-2020 as 16:26:30
*/

if (file_exists('classes/db.php')){
	
	require('classes/db.php');
	require('classes/util/util.php');
	require("classes/models/Empresas.php"); 
	require("classes/models/Especies.php"); 
	require("classes/models/Fotos.php"); 
	require("classes/models/Pessoas.php"); 
	require("classes/models/Pets.php"); 
	require("classes/models/Status.php"); 
	require("classes/models/Tipos.php"); 


	require("classes/models/Bairros.php"); 
	require("classes/models/Estados.php"); 
	require("classes/models/Municipios.php"); 

	require("classes/models/InteracoesPets.php"); 
	require("classes/models/DialogosPessoasPets.php"); 
	require("classes/models/MovimentacoesPets.php"); 

} elseif (file_exists('../classes/db.php')){
		
	require('../classes/db.php');
	require('../classes/util/util.php');
	require("../classes/models/Empresas.php"); 
	require("../classes/models/Especies.php"); 
	require("../classes/models/Fotos.php"); 
	require("../classes/models/Pessoas.php"); 
	require("../classes/models/Pets.php"); 
	require("../classes/models/Status.php"); 
	require("../classes/models/Tipos.php"); 


	require("../classes/models/Bairros.php"); 
	require("../classes/models/Estados.php"); 
	require("../classes/models/Municipios.php"); 

	require("../classes/models/InteracoesPets.php"); 
	require("../classes/models/DialogosPessoasPets.php"); 
	require("../classes/models/MovimentacoesPets.php"); 

} else {
	
	require('../../classes/db.php');
	require('../../classes/util/util.php');
	require("../../classes/models/Empresas.php"); 
	require("../../classes/models/Especies.php"); 
	require("../../classes/models/Fotos.php"); 
	require("../../classes/models/Pessoas.php"); 
	require("../../classes/models/Pets.php"); 
	require("../../classes/models/Status.php"); 
	require("../../classes/models/Tipos.php"); 


	require("../../classes/models/Bairros.php"); 
	require("../../classes/models/Estados.php"); 
	require("../../classes/models/Municipios.php");

	require("../../classes/models/InteracoesPets.php"); 
	require("../../classes/models/DialogosPessoasPets.php"); 
	require("../../classes/models/MovimentacoesPets.php");

} 

class Gestor {

	private $db;
	private $empresas;
	private $especies;
	private $fotos;
	private $pessoas;
	private $pets;
	private $status;
	private $tipos;
	private $bairros;
	private $estados;
	private $municipios;
	private $interacoesPets;
	private $dialogosPessoasPets;
	private $movimentacoesPets;
	
	
	public function __construct() {
		
		$this->empresas 		= new Empresas();
		$this->especies 		= new Especies();
		$this->fotos 			= new Fotos();
		$this->pessoas 			= new Pessoas();
		$this->pets 			= new Pets();
		$this->status 			= new Status();
		$this->tipos 			= new Tipos();
		$this->bairros			= new Bairros();
		$this->estados 			= new Estados();
		$this->municipios 		= new Municipios();
		$this->interacoesPets	= new InteracoesPets();
		$this->dialogosPessoasPets = new DialogosPessoasPets();
		$this->movimentacoesPets = new MovimentacoesPets();
		

			$this->db = new DB(array('metodo'=>1));
			$this->db->conectar();
		
		}

		// SETOR REFERENTE AOS METODOS GENERICOS

		public function montaOptionsSelect($tabela, $nomeExibicao, $selecionado, $ordenacao = '', $ordenacao_tipo = '',  $remover = ''){	

			$this->db->montaOptionsSelect($tabela, $nomeExibicao, $selecionado, $ordenacao = '', $ordenacao_tipo = '',  $remover = '');

		}


	// SETOR REFERENTE AS CLASSES DA TABELA EMPRESAS

	public function retornarEmpresas($id, $campo = 'id', $tabela = 'empresas', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->empresas->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);			
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirEmpresas($objeto) {
	
		 $retorno = $this->empresas->inserir($objeto);
				 
		 if($retorno) {
		 	return $retorno;
		 } else {
		 	return false;
		 }
	}
	public function editarEmpresas($objeto,$campo = 'id') {
		$retorno = $this->empresas->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirEmpresas($valor,$campo = 'id') {
		$retorno = $this->empresas->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA ESPECIES

	public function retornarEspecies($id, $campo = 'id', $tabela = 'especies', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->especies->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirEspecies($objeto) {
		$retorno = $this->especies->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarEspecies($objeto,$campo = 'id') {
		$retorno = $this->especies->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirEspecies($valor,$campo = 'id') {
		$retorno = $this->especies->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA FOTOS

	public function retornarFotos($id, $campo = 'id', $tabela = 'fotos', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->fotos->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirFotos($objeto) {
		$retorno = $this->fotos->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarFotos($objeto,$campo = 'id') {
		$retorno = $this->fotos->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirFotos($valor,$campo = 'id') {
		$retorno = $this->fotos->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA PESSOAS

	public function retornarPessoas($id, $campo = 'id', $tabela = 'pessoas', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->pessoas->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirPessoas($objeto) {
		$retorno = $this->pessoas->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarPessoas($objeto,$campo = 'id') {
		$retorno = $this->pessoas->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirPessoas($valor,$campo = 'id') {
		$retorno = $this->pessoas->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA PETS

	public function retornarPets($id, $campo = 'id', $tabela = 'pets', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->pets->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirPets($objeto) {
		$retorno = $this->pets->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarPets($objeto,$campo = 'id') {
		$retorno = $this->pets->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirPets($valor,$campo = 'id') {
		$retorno = $this->pets->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA STATUS

	public function retornarStatus($id, $campo = 'id', $tabela = 'status', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->status->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirStatus($objeto) {
		$retorno = $this->status->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarStatus($objeto,$campo = 'id') {
		$retorno = $this->status->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirStatus($valor,$campo = 'id') {
		$retorno = $this->status->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA TIPOS

	public function retornarTipos($id, $campo = 'id', $tabela = 'tipos', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->tipos->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirTipos($objeto) {
		$retorno = $this->tipos->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarTipos($objeto,$campo = 'id') {
		$retorno = $this->tipos->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirTipos($valor,$campo = 'id') {
		$retorno = $this->tipos->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}



	// SETOR REFERENTE AS CLASSES DA TABELA BAIRROS

	public function retornarBairros($id, $campo = 'id', $tabela = 'bairros', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->bairros->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirBairros($objeto) {
		$retorno = $this->bairros->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarBairros($objeto,$campo = 'id') {
		$retorno = $this->bairros->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirBairros($valor,$campo = 'id') {
		$retorno = $this->bairros->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA ESTADOS

	public function retornarEstados($id, $campo = 'id', $tabela = 'estados', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->estados->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirEstados($objeto) {
		$retorno = $this->estados->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarEstados($objeto,$campo = 'id') {
		$retorno = $this->estados->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirEstados($valor,$campo = 'id') {
		$retorno = $this->estados->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA MUNICIPIOS

	public function retornarMunicipios($id, $campo = 'id', $tabela = 'municipios', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->municipios->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function retornarBairrosLike($municipio, $uf) {
		
		
		

		//$select    = "SELECT * FROM bairros WHERE (nome LIKE '%" . utf8_encode (urldecode ($municipio)) .  "%'  OR nome LIKE '%" . utf8_encode (urldecode (strtolower($municipio))) .  "%') AND uf = '$uf' ";		
		
		$select    = "SELECT * FROM bairros WHERE uf = '$uf' ";		
		
		
		$select = $select . " ORDER BY nome ASC";				
		//echo $select;

		
		$statement = $this->db->db->prepare($select);
	

        $statement->execute();
	
		if ($statement->rowCount() == 1) {
        	$retorno = $statement->fetch(PDO::FETCH_OBJ);
		} else {
			$retorno = $statement->fetchAll(PDO::FETCH_OBJ);
		}
		
		
		
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirMunicipios($objeto) {
		$retorno = $this->municipios->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarMunicipios($objeto,$campo = 'id') {
		$retorno = $this->municipios->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirMunicipios($valor,$campo = 'id') {
		$retorno = $this->municipios->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA InteracoesPets

	public function retornarInteracoesPets($id, $campo = 'id', $tabela = 'interacoes_pets', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->interacoesPets->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirInteracoesPets($objeto) {
		$retorno = $this->interacoesPets->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarInteracoesPets($objeto,$campo = 'id') {
		$retorno = $this->interacoesPets->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirInteracoesPets($valor,$campo = 'id') {
		$retorno = $this->interacoesPets->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA DialogosPessoasPets

	public function retornarDialogosPessoasPets($id, $campo = 'id', $tabela = 'dialogos_pessoas_pets', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->dialogosPessoasPets->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirDialogosPessoasPets($objeto) {
		$retorno = $this->dialogosPessoasPets->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarDialogosPessoasPets($objeto,$campo = 'id') {
		$retorno = $this->dialogosPessoasPets->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirDialogosPessoasPets($valor,$campo = 'id') {
		$retorno = $this->dialogosPessoasPets->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}


	// SETOR REFERENTE AS CLASSES DA TABELA MovimentacoesPets

	public function retornarMovimentacoesPets($id, $campo = 'id', $tabela = 'movimentacoes_pets', $ordenadoPor = '', $order = '', $limit = '') {
		$retorno = $this->movimentacoesPets->retornar($id, $campo , $tabela, $ordenadoPor, $order, $limit);
					
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function inserirMovimentacoesPets($objeto) {
		$retorno = $this->movimentacoesPets->inserir($objeto);
				 
		if($retorno) {
			return $retorno;
		} else {
			return false;
		}
	}
	public function editarMovimentacoesPets($objeto,$campo = 'id') {
		$retorno = $this->movimentacoesPets->editar($objeto,$campo);
				 
		if($retorno) {
			return true;
		} else {
			return false;
		}
	}
	public function excluirMovimentacoesPets($valor,$campo = 'id') {
		$retorno = $this->movimentacoesPets->excluir($valor,$campo) ;

				 
		if($retorno) {
				return true;
		} else {
			return false;
		}
	}
}
?>
