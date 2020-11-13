<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 06-02-2020 as 16:35:06
*/

class Bairros extends DB {

	private $tabela = 'bairros';
	private $id;
	private $codigo;
	private $nome;
	private $uf;

	/**
	* Método construtor do objeto bairros  
	 @param inteiro id
	 @param char codigo
	 @param string nome
	 @param char uf

	**/
	public function __construct($id="",$codigo="",$nome="",$uf="") {
		$this->id = $id;
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->uf = $uf;
	}

	public function retornar($id, $campo = 'id', $tabela = 'bairros', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'bairros') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'bairros') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'bairros'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>