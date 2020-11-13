<?php

/**

*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Empresas extends DB {

	private $tabela = 'empresas';
	private $id;
	private $nome;
	private $email;
	private $responsavel;
	private $telefone;
	private $especies_atendidas;

	//Marcos
	private $id_tipos;
	
	private $senha;
	private $face_id;

	/**
	* Método construtor do objeto empresas  
	 @param inteiro id
	 @param inteiro id_tipos
	 @param string nome
	 @param string email
	 @param string responsavel
	 @param string telefone
	 @param inteiro especies_atendidas
	 @param inteiro tipo_ong
	 @param inteiro face_id


	**/
	public function __construct($id="",$id_tipos="",$nome="",$email="",$responsavel="",$telefone="",$especies_atendidas="",$senha="",$face_id="") {
		$this->id = $id;
		$this->id_tipos = $id_tipos;
		$this->nome = $nome;
		$this->email = $email;
		$this->responsavel = $responsavel;
		$this->telefone = $telefone;
		$this->especies_atendidas = $especies_atendidas;
		$this->face_id = $face_id;
		$this->senha = $senha;
	}

	public function retornar($id, $campo = 'id', $tabela = 'empresas', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'empresas') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'empresas') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'empresas'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
