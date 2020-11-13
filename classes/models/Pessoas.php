<?php

/**
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Pessoas extends DB {

	private $tabela = 'pessoas';
	private $id;
	private $nome;
	private $email;
	private $face_id;
	private $telefone;
	private $especies_interesses;
	private $senha;
	private $id_municipios_interesses;

	/**
	* Método construtor do objeto pessoas  
	 @param inteiro id
	 @param string nome
	 @param string email
	 @param string face_id
	 @param string telefone
	 @param inteiro especies_interesses

	**/
	public function __construct($id="",$nome="",$email="",$face_id="",$telefone="",$especies_interesses="",$senha="",$id_municipios_interesses="") {
		$this->id = $id;
		$this->nome = $nome;
		$this->email = $email;
		$this->face_id = $face_id;
		$this->telefone = $telefone;
		$this->especies_interesses = $especies_interesses;
		$this->senha 	= $senha;
		$this->id_municipios_interesses 	= $id_municipios_interesses;
	}

	public function retornar($id, $campo = 'id', $tabela = 'pessoas', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'pessoas') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'pessoas') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'pessoas'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
