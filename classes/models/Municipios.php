<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 06-02-2020 as 16:35:06
*/

class Municipios extends DB {

	private $tabela = 'municipios';
	private $id;
	private $codigo;
	private $nome;
	private $uf;

	/**
	* Método construtor do objeto municipios  
	 @param inteiro id
	 @param inteiro codigo
	 @param string nome
	 @param char uf

	**/
	public function __construct($id="",$codigo="",$nome="",$uf="") {
		$this->id = $id;
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->uf = $uf;
	}

	public function retornar($id, $campo = 'id', $tabela = 'municipios', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'municipios') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'municipios') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'municipios'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>