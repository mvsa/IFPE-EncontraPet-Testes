<?php

/**

*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Fotos extends DB {

	private $tabela = 'fotos';
	private $id;
	private $id_pets;
	private $legenda;
	private $caminho;
	private $data;

	/**
	* Método construtor do objeto fotos  
	 @param inteiro id
	 @param inteiro id_pets
	 @param string legenda
	 @param string caminho
	 @param date data

	**/
	public function __construct($id="",$id_pets="",$legenda="",$caminho="",$data="") {
		$this->id = $id;
		$this->id_pets = $id_pets;
		$this->legenda = $legenda;
		$this->caminho = $caminho;
		$this->data = $data;
	}

	public function retornar($id, $campo = 'id', $tabela = 'fotos', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'fotos') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'fotos') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'fotos'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
