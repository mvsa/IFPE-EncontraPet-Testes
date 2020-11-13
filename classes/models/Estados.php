<?php

/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 06-02-2020 as 16:35:06
*/

class Estados extends DB {

	private $tabela = 'estados';
	private $id;
	private $codigo_uf;
	private $nome;
	private $uf;
	private $regiao;

	/**
	* Método construtor do objeto estados  
	 @param inteiro Id
	 @param inteiro codigo_uf
	 @param string nome
	 @param char uf
	 @param inteiro regiao

	**/
	public function __construct($id="",$codigo_uf="",$nome="",$uf="",$regiao="") {
		$this->id = $id;
		$this->codigo_uf = $codigo_uf;
		$this->nome = $nome;
		$this->uf = $uf;
		$this->regiao = $regiao;
	}

	public function retornar($id, $campo = 'id', $tabela = 'estados', $ordenadoPor = '', $order = '', $limit = '') {
		return parent::retornar($id, $campo, $tabela, $ordenadoPor, $order, $limit);
	}

	public function inserir($objeto, $tabela = 'estados') {
		return parent::inserir($objeto, $tabela);
	}

	public function editar($objeto, $campo = 'id', $tabela = 'estados') {
		return parent::editar($objeto, $campo, $tabela);
	}

	public function excluir($valor, $campo = 'id', $tabela = 'estados'){
		return parent::excluir($valor, $campo, $tabela);
	}

}
?>
