<?php

/**

*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Especies extends DB {

	private $tabela = 'especies';
	private $id;
	private $tipo;

	/**
	* Método construtor do objeto especies  
	 @param inteiro id
	 @param string tipo

	**/
	public function __construct($id="",$tipo="") {
		$this->id = $id;
		$this->tipo = $tipo;
	}

	public function retornar($id, $campo = 'id', $tabela = 'especies', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'especies') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'especies') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'especies'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
