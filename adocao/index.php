<?php
/**
 * 
 * 
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 09:00:30
*
* 
* */



/*
 * habilitando o uso de sessoes
 * */

ob_start();
session_start();

/*
 * verificando se o usuario esta logado senao redireciona
 * */
if (!$_SESSION['ENCONTRAPET_codigo']){
	header("Location: ../splash");
}

# 
# REQUIRES OBRIGATORIOS
#


require('../classes/gestor.php');

#
# INSTANCIA DE OBJETOS OBRIGATORIAS
#


$util = new Util();
$gestor   = new Gestor();    

#
/*
 * 
 * reuperar os pets cadastrados anteriormente */
 
$objetoPetsAdocao = $gestor->retornarPets(1,'id_status','pets','id','DESC');
if ($objetoPetsAdocao){
	if (count($objetoPetsAdocao) < 2){
		$objetoPetsAdocao = array($objetoPetsAdocao);
	}
}

//var_dump($objetoPets);
//die;
?>
<div class='container text-left'>
			<div class='row' style='padding-bottom:20px'>
				<div class='col-12 text-right'>
				
					 <a class="card-title" data-toggle="collapse" href="#divFiltros" role="button" aria-expanded="false" aria-controls="divFiltros" style='color:#333; text-decoration:none'><i class="fa fa-search"></i> Filtros </a>
					 
				</div>
			</div>
            <div class="collapse" id="divFiltros">				
				<div class='row' style='padding-bottom:20px'>					
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label>Espécie:</label>
						<select class='form-control'>
							<option>Todos</option>
							<option>Cães</option>
							<option>Gatxs</option>
							
						</select>
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label>Sexo:</label>
						<select class='form-control'>
							<option>Ambos</option>
							<option>Femea</option>
							<option>Macho</option>
						</select>
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label style='display:block'>Castrado:</label>
						<select class='form-control' style=''>
							<option>Não importa</option>
							<option>Sim</option>
							<option>Não</option>
						</select>
						
						
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label style='display:block'>Vermifugado:</label>
						<select class='form-control' style=''>
							<option>Não importa</option>
							<option>Sim</option>
							<option>Não</option>
						</select>
						
						
					</div>


					
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label>Estado:</label>
						<select class='form-control'>
							<option>Todos</option>
						</select>
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label>Cidade:</label>
						<select class='form-control'>
							<option>Todos</option>
						</select>
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; '>	
						<label>Bairro:</label>
						<select class='form-control'>
							<option>Todos</option>
						</select>
					</div>
					<div class='col-6 col-sm-3' style='padding-bottom:5px; padding-top:20px; '>	
				
						
						<button class="btn btn-primary btn-round btn-lg" style='width:100%'><i class="fa fa-search"></i> Filtrar</button>
					</div>
				</div>
	
	
			</div>
			
				
	<div class='row animais'>
			
						<?php
						foreach($objetoPetsAdocao as $obj){
							
							if ( $obj->id_pessoas != $_SESSION['ENCONTRAPET_codigo']){ // se o pet nao for meu
								
								$imagem = $gestor->retornarPets($obj->id,'id_pets','fotos','id','DESC',1)->caminho;
								
								if (!$imagem){
									if ($obj->id_especies == 1){ // cachorros
										$imagem = '../assets/img/pets/black-dog.png'; 
									} else {
										$imagem = '../assets/img/pets/black-cat.png'; 
									}
									
								} else {
									
									$imagem = '../uploads/pet/' . $imagem;
								}
									
								if ($dataHora){
									$dataHora= $util->retornaData($dataHora,'br');
								}
							?>	
					
								<div class='col-6 pet' style=''>	
									
									<figure width='100%'>
									<a href="../adocao/pet/?id=<?=$obj->id?>">	
									
									<img class="d-block" src="<?=$imagem?>" alt="Dog 2">
									<figcaption><h6 style='padding-bottom:0; margin-top:0; margin-bottom:0'><?=$obj->nome?></h6>
									<small>
									<?php								
									if ($obj->sexo != "Não sei"){
										echo '#'. $obj->sexo;
									}								
									?>
									<?php								
									if ($obj->castrado == "Sim"){
										if ($obj->sexo == "Fêmea"){										
											echo " #castrada";
										} else {
											echo " #castrado";
										}
									}								
									?>
									<?php								
									if ($obj->vacinado == "Sim"){
										if ($obj->sexo == "Fêmea"){										
											echo " #vacinada";
										} else {
											echo " #vacinado";
										}
										
										
									}								
									?>
									<?php								
									if ($obj->vermifugado == "Sim"){
										if ($obj->sexo == "Fêmea"){										
											echo " #vermifugada";
										} else {
											echo " #vermifugado";
										}
											
										
									}								
									?>
									</small>
									</figcaption>	
									</a>		
									</figure>
								</div>
			
							<?php
							}
						}
						?>		
						
	</div>



</div>
<script>

</script>
