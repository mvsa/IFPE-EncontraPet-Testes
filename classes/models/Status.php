<?php

/**
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Status extends DB {

	private $tabela = 'status';
	private $id;
	private $status;

	/**
	* Método construtor do objeto status  
	 @param inteiro id
	 @param string status

	**/
	public function __construct($id="",$status="") {
		$this->id = $id;
		$this->status = $status;
	}

	public function retornar($id, $campo = 'id', $tabela = 'status', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'status') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'status') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'status'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
