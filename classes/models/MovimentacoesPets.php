<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 10:16:17
*/

class MovimentacoesPets extends DB {

	private $tabela = 'movimentacoes_pets';
	private $id;
	private $id_pets;
	private $id_status;
	private $data_hora;

	/**
	* Método construtor do objeto tipos  
	 @param inteiro id
	 @param string tipo

	**/
	public function __construct($id="",$id_pets="",$id_status="",$data_hora="") {
		$this->id = $id;
		$this->id_pets = $id_pets;
		$this->id_status = $id_status;
		$this->data_hora = $data_hora;
	}

	public function retornar($id, $campo = 'id', $tabela = 'movimentacoes_pets', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'movimentacoes_pets') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'movimentacoes_pets') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'movimentacoes_pets'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
