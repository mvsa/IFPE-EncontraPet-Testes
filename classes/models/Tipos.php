<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class Tipos extends DB {

	private $tabela = 'tipos';
	public $id;
	public $tipo;

	/**
	* Método construtor do objeto tipos  
	 @param inteiro id
	 @param string tipo

	**/
	public function __construct($id="",$tipo="") {
		$this->id = $id;
		$this->tipo = $tipo;
	}

	public function retornar($id, $campo = 'id', $tabela = 'tipos', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'tipos') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'tipos') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'tipos'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>