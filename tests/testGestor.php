<?php 
/**
*	@autor Flávio Silva Barndão
*	@version 10-11-2020 as 09:00:30
*/


# 
# REQUIRES OBRIGATORIOS
#

require('../classes/gestor.php');
require('../vendor/autoload.php');

$gestor   = new Gestor();    


use PHPUnit\Framework\TestCase;

class GestorTest extends TestCase {

	private $gestor;
	public function __construct($gestor) {
		$this->gestor = $gestor;	
	}
	
	/* testes de bairros */
		
	public function testInserirBairros() {                  
		$objeto = array(array('codigo'=>'001','nome'=>'teste bairro','uf'=>'PE'));            
		$resultado = $this->gestor->inserirBairros($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarBairros() {
		$ultimo_inserido = $this->gestor->retornarBairros("","","bairros","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'codigo'=>'001','nome'=>'teste bairro','uf'=>'PE'));            
		$resultado = $this->gestor->editarBairros($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirBairros(){
		$ultimo_inserido = $this->gestor->retornarBairros("","","bairros","id",'DESC',1);
		$resultado = $this->gestor->excluirBairros($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de dialogos_pessoas_pets */
			
	public function testInserirDialogosPessoasPets() {                  
		$objeto = array(array('id_pets'=>1,'id_pessoas'=>'1','data_hora'=>date("Y-m-d H:i:s"),'texto'=>'ola'));            
		$resultado = $this->gestor->inserirDialogosPessoasPets($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarDialogosPessoasPets() {
		$ultimo_inserido = $this->gestor->retornarDialogosPessoasPets("","","dialogos_pessoas_pets","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'id_pets'=>1,'id_pessoas'=>'1','data_hora'=>date("Y-m-d H:i:s"),'texto'=>'ola'));            
		$resultado = $this->gestor->editarDialogosPessoasPets($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirDialogosPessoasPets(){
		$ultimo_inserido = $this->gestor->retornarDialogosPessoasPets("","","dialogos_pessoas_pets","id",'DESC',1);
		$resultado = $this->gestor->excluirDialogosPessoasPets($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de especies */
		
	public function testInserirEspecies() {                  
		$objeto = array(array('tipo'=>'Rato'));            
		$resultado = $this->gestor->inserirEspecies($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarEspecies() {
		$ultimo_inserido = $this->gestor->retornarEspecies("","","especies","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'tipo'=>'Hamister')); 
		$resultado = $this->gestor->editarEspecies($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirEspecies(){
		$ultimo_inserido = $this->gestor->retornarEspecies("","","especies","id",'DESC',1);
		$resultado = $this->gestor->excluirEspecies($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}
	/* testes de estados */
		
	public function testInserirEstados() {                  
		$objeto = array(array('codigo_uf'=>'12','nome'=>'Acri','uf'=>'AI', 'regiao'=>1));            
		$resultado = $this->gestor->inserirEstados($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarEstados() {
		$ultimo_inserido = $this->gestor->retornarEstados("","","estados","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'codigo_uf'=>'12','nome'=>'Acre','uf'=>'AC', 'regiao'=>1)); 
		$resultado = $this->gestor->editarEstados($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirEstados(){
		$ultimo_inserido = $this->gestor->retornarEstados("","","estados","id",'DESC',1);
		$resultado = $this->gestor->excluirEstados($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de fotos */
		
	public function testInserirFotos() {                  
		$objeto = array(array('id_pets'=>1,'legenda'=>'legendario','caminho'=>'adt312ast13.jpg'));            
		$resultado = $this->gestor->inserirFotos($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarFotos() {
		$ultimo_inserido = $this->gestor->retornarFotos("","","fotos","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'id_pets'=>2,'legenda'=>'alterando a legenda','caminho'=>'adt312ast13.jpg'));    
		$resultado = $this->gestor->editarFotos($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirFotos(){
		$ultimo_inserido = $this->gestor->retornarFotos("","","fotos","id",'DESC',1);
		$resultado = $this->gestor->excluirFotos($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}	

	/* testes de interacoes_pets */
			
	public function testInserirInteracoesPets() {                  
		$objeto = array(array('id_pets'=>1,'id_pessoas'=>'1','data_hora'=>date("Y-m-d H:i:s")));            
		$resultado = $this->gestor->inserirInteracoesPets($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarInteracoesPets() {
		$ultimo_inserido = $this->gestor->retornarInteracoesPets("","","interacoes_pets","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'id_pets'=>1,'id_pessoas'=>'2','data_hora'=>date("Y-m-d H:i:s"))); 
		$resultado = $this->gestor->editarInteracoesPets($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirInteracoesPets(){
		$ultimo_inserido = $this->gestor->retornarInteracoesPets("","","interacoes_pets","id",'DESC',1);
		$resultado = $this->gestor->excluirInteracoesPets($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de movimentacoes pets */

	public function testInserirMovimentacoesPets() {                  
		$objeto = array(array('id_pets'=>1,'id_status'=>'1','data_hora'=>date("Y-m-d H:i:s")));            
		$resultado = $this->gestor->inserirMovimentacoesPets($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarMovimentacoesPets() {
		$ultimo_inserido = $this->gestor->retornarMovimentacoesPets("","","movimentacoes_pets","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'id_pets'=>1,'id_status'=>'2','data_hora'=>date("Y-m-d H:i:s"))); 
		$resultado = $this->gestor->editarMovimentacoesPets($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirMovimentacoesPets(){
		$ultimo_inserido = $this->gestor->retornarMovimentacoesPets("","","movimentacoes_pets","id",'DESC',1);
		$resultado = $this->gestor->excluirMovimentacoesPets($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de municipios */
		
	public function testInserirMunicipios() {                  
		$objeto = array(array('nome'=>'teste','codigo'=>'9898989','uf'=>'PE'));            
		$resultado = $this->gestor->inserirMunicipios($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarMunicipios() {
		$ultimo_inserido = $this->gestor->retornarMunicipios("","","municipios","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'nome'=>'teste alterado','codigo'=>'13123213','uf'=>'SP'));  
		$resultado = $this->gestor->editarMunicipios($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirMunicipios(){
		$ultimo_inserido = $this->gestor->retornarMunicipios("","","municipios","id",'DESC',1);
		$resultado = $this->gestor->excluirMunicipios($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}	

	/* testes de pessoas */
		
	public function testInserirPessoas() {                  
		$objeto = array(array('nome'=>'teste','email'=>'teste@ifpe.edu.br','face_id'=>'123123','telefone'=>'8088889899','senha'=>'123'));            
		$resultado = $this->gestor->inserirPessoas($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarPessoas() {
		$ultimo_inserido = $this->gestor->retornarPessoas("","","pessoas","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'nome'=>'teste','email'=>'teste@ifpe.edu.br','face_id'=>'123123','telefone'=>'8088889899','senha'=>'123'));
		$resultado = $this->gestor->editarPessoas($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirPessoas(){
		$ultimo_inserido = $this->gestor->retornarPessoas("","","pessoas","id",'DESC',1);
		$resultado = $this->gestor->excluirPessoas($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de pets */
	
	public function testInserirPets() {
            
		$objeto = array(array('id_pessoas'=>1, 'id_especies'=>1, 'nome'=>'teste' , 'descricao'=>'testando', 'sexo'=>'Macho','castrado'=>'sim', 'idade'=>'10', 'id_status'=>1, 'vacinado'=>'sim', 'vermifugado'=>'sim', 'estado'=>urldecode('PE'), 'municipio'=>urldecode('RECIFE'), 'bairro'=>urldecode('IPSEP')));	
		$resultado = $this->gestor->inserirPets($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarPets() {
		$ultimo_inserido = $this->gestor->retornarPets("","","pets","id",'DESC',1);
		$objeto = array(array('id'=>$ultimo_inserido,'id_pessoas'=>1,'id_especies'=>1, 'nome'=>'teste alterado' , 'descricao'=>'testando', 'sexo'=>'Femea','castrado'=>'nao', 'idade'=>'5', 'id_status'=>1, 'vacinado'=>'nao', 'vermifugado'=>'nao', 'estado'=>urldecode('PE'), 'municipio'=>urldecode('RECIFE'), 'bairro'=>urldecode('IPSEP')));	
		$resultado = $this->gestor->editarPets($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirPets(){
		$ultimo_inserido = $this->gestor->retornarPets("","","pets","id",'DESC',1);
		$resultado = $this->gestor->excluirPets($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}

	/* testes de status */
			
	public function testInserirStatus() {
		$objeto = array(array("status"=>"implementando testes"));
		$resultado = $this->gestor->inserirStatus($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarStatus() {
		$ultimo_inserido = $this->gestor->retornarStatus("","","status","id",'DESC',1);
		$objeto = array(array("id"=>$ultimo_inserido, "status"=>"alterando a implementação de testes"));
		$resultado = $this->gestor->editarStatus($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirStatus(){
		$ultimo_inserido = $this->gestor->retornarStatus("","","status","id",'DESC',1);
		$resultado = $this->gestor->excluirStatus($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}
	/* testes de tipos */
		
	public function testInserirTipos() {
		$objeto = array(array("tipo"=>"implementando testes"));
		$resultado = $this->gestor->inserirTipos($objeto);
		$this->assertGreaterThan(1, $resultado); // quando insere com sucesso retornamos o identificador
	}

	public function testEditarTipos() {
		$ultimo_inserido = $this->gestor->retornarTipos("","","tipos","id",'DESC',1);
		$objeto = array(array("id"=>$ultimo_inserido, "tipo"=>"alterando a implementação de testes"));
		$resultado = $this->gestor->editarTipos($objeto);
		$this->assertEquals(1, $resultado); // retorna 1 quando update com sucesso
	}

	public function testExcluirTipos(){
		$ultimo_inserido = $this->gestor->retornarTipos("","","tipos","id",'DESC',1);
		$resultado = $this->gestor->excluirTipos($ultimo_inserido);
		$this->assertEquals(1, $resultado); // retorna 1 quando excluido com sucesso
	}	
	
}	

$teste = new GestorTest($gestor);


$teste->testInserirBairros();
$teste->testEditarBairros();
$teste->testExcluirBairros();

$teste->testInserirDialogosPessoasPets();
$teste->testEditarDialogosPessoasPets();
$teste->testExcluirDialogosPessoasPets();

$teste->testInserirEspecies();
$teste->testEditarEspecies();
$teste->testExcluirEspecies();

$teste->testInserirEstados();
$teste->testEditarEstados();
$teste->testExcluirEstados();

$teste->testInserirFotos();
$teste->testEditarFotos();
$teste->testExcluirFotos();

$teste->testInserirInteracoesPets();
$teste->testEditarInteracoesPets();
$teste->testExcluirInteracoesPets();

$teste->testInserirMovimentacoesPets();
$teste->testEditarMovimentacoesPets();
$teste->testExcluirMovimentacoesPets();

$teste->testInserirMunicipios();
$teste->testEditarMunicipios();
$teste->testExcluirMunicipios();

$teste->testInserirPessoas();
$teste->testEditarPessoas();
$teste->testExcluirPessoas();

$teste->testInserirPets();
$teste->testEditarPets();
$teste->testExcluirPets();

$teste->testInserirStatus();
$teste->testEditarStatus();
$teste->testExcluirStatus();

$teste->testInserirTipos();
$teste->testEditarTipos();
$teste->testExcluirTipos();

/* that's all */
?>
