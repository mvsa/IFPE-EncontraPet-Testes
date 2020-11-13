<?php

/**

*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Pets extends DB {

	private $tabela = 'pets';
	private $id;
	private $id_pessoas;
	private $id_especies;
	private $nome;
	private $descricao;
	private $sexo;
	private $castrado;
	private $idade;
	private $id_status;
	private $vacinado ;
	private $vermifugado;
	private $lat;
	private $lng;
	private $responsavel;
	private $telefone;
	private $estado;
	private $municipio;
	private $bairro;

	/**
	* Método construtor do objeto pets  
	 @param inteiro id
	 @param inteiro id_pessoas
	 @param inteiro id_especies
	 @param string nome
	 @param text descricao
	 @param string sexo
	 @param string castrado
	 @param string idade
	 @param inteiro id_status

	**/
	public function __construct($id="",$id_pessoas="",$id_especies="",$nome="",$descricao="",$sexo="",$castrado="",$idade="",$id_status="",$vacinado ="",$vermifugado="",$lat="",$lng="",$responsavel="",$telefone="",$estado="",$municipio="",$bairro="") {
		$this->id = $id;
		$this->id_pessoas = $id_pessoas;
		$this->id_especies = $id_especies;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->sexo = $sexo;
		$this->castrado = $castrado;
		$this->idade = $idade;
		$this->id_status = $id_status;
		$this->vacinado  = $vacinado ;
		$this->vermifugado = $vermifugado;
		$this->lat = $lat;
		$this->lng = $lng;
		$this->responsavel = $responsavel;
		$this->telefone = $telefone;
		
		$this->estado = $estado;
		$this->municipio = $municipio;
		$this->bairro = $bairro;
	}

	public function retornar($id, $campo = 'id', $tabela = 'pets', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'pets') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'pets') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'pets'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
