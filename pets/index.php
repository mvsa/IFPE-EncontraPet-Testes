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
# TRATAMENTO DE INJECTION
#

$_POST = $util->validaParametro($_POST);
$_GET  = $util->validaParametro($_GET);


/*
 * 
 * reuperar os pets cadastrados anteriormente */
 
$objetoPets = $gestor->retornarPets($_SESSION['ENCONTRAPET_codigo'],'id_pessoas');
if ($objetoPets){
	if (count($objetoPets) < 2){
		$objetoPets = array($objetoPets);
	}
}

//var_dump($objetoPets);
//die;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    EncontraPet - Início
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  

  <link href="../assets/css/set1.css" rel="stylesheet" />
  <link href="../assets/css/encontrapet.css" rel="stylesheet" />
  
  
<style type="text/css">

</style>
</head>

<body class="text-center" style=''>


              
       
              

            <div class="" style='padding:0'>      
				
				<?php
				require("../inc/navegacao.php")
				?>
            

              <!-- Nav tabs -->
              <div style="">
				  
				       
				  

                <div class="" style='padding-left:3px; padding-right:3px; padding-top:5px; '>
                  <!-- Tab panes -->
                  <div class="tab-content text-center">

					  
                    <div class="tab-pane active" id="pets" role="tabpanel">
						<div class='container'>
							<div class='row'>
									<div class='col-12'>
										<h6>Pets cadastrados</h6>
										<hr />
									</div>
							</div>
						<?php
						if ($objetoPets){
							foreach($objetoPets as $obj){
								
								$dataHora = $gestor->retornarMovimentacoesPets(array($obj->id,1),array('id_pets','id_status'),'movimentacoes_pets','id','DESC',1)->data_hora;
								$imagem = $gestor->retornarFotos($obj->id,'id_pets','fotos','id','DESC',1)->caminho;
								
								
								
								$objetoInteracoesPets = $gestor->retornarInteracoesPets($obj->id,'id_pets','interacoes_pets','id','DESC');
								if ($objetoInteracoesPets){
									if (count($objetoInteracoesPets) < 2){
										$objetoInteracoesPets = array($objetoInteracoesPets);
									}
								}
								
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
							
								<div class='row'>
									<div class='col-4'>
										
										
									<img src='<?=$imagem?>' style='width:100%'/>
									
									</div>
									<div class='col-8 text-left' style='padding-left:0; '>
									<?=$obj->nome?>, 
									<?php								
									if ($obj->sexo != "Não sei"){
										echo $obj->sexo;
									}								
									?>
									<br />
									<?php								
									
										echo $dataHora;
																	
									?>
									<br />
									
									<b style='float:left'><?=$gestor->retornarStatus($obj->id_status)->status?> </b>
									
									</div>
									<div class='col-12 text-left'>
									<a href='#' class='btn btn-primary' style='width:48%'><i class='fa fa-edit'></i> Editar</a>
									
												<a class="btn btn-primary" style='width:48%' data-toggle="collapse" href="#collapse<?=$obj->id?>" role="button" aria-expanded="false" aria-controls="collapse<?=$obj->id?>">
													<i class='fa fa-heart'></i>
												<?php
												
												if ($objetoInteracoesPets){
													if (count($objetoInteracoesPets) == 1 ){
														echo	count($objetoInteracoesPets) . " Interação";
													} else { 
													
														echo count($objetoInteracoesPets) . " Interações";					
													}
												} else {
													echo "0 Interações";
												}
												?>	
												</a>
												
												
											<div class="collapse" id="collapse<?=$obj->id?>" style='opacity:0.8'>
											  <div class="card card-body">
												
												
												
												
												
												
														<?php
														if ($objetoInteracoesPets){
															foreach($objetoInteracoesPets as $obj){
																
																
																$objPets = $gestor->retornarPets($obj->id_pets);
																$objPessoas = $gestor->retornarPessoas($obj->id_pessoas);
																
																$dataHora = $obj->data_hora;
																
																
																	
																if ($dataHora){
																	$dataHora= $util->retornaData($dataHora,'br');
																}
															?>
															
																<div class='row'>
																	
																	<div class='col-12 text-left' style='padding-left:0; '>
																		
																		
																	<b><?=$objPessoas->nome?></b><br><?=$objPessoas->telefone?>
																	<br />
																	<?php								
																	
																		echo '<small>' . $dataHora . ' às ' . substr($obj->data_hora,10) . '</small>';
																									
																	?>
																	<span style='float:right'>
																		
																		<a href='javascript:void(0);' onclick="cancelaInteressePet('<?=$obj->id?>', '<?=$objPessoas->nome?>')" class='rounded' style='padding:10px; background:#ddd'><i class='fa fa-ban' style='color:red'></i></a>
																		<a href='javascript:void(0);' onclick="adotaPet('<?=$obj->id?>', '<?=$objPessoas->nome?>')" class='rounded' style='padding:10px; background:#ddd'><i class='fa fa-check' style='color:green'></i></a>
																		
																		</span>
																	</div>
																	<div class='col-4'>
																	
																	</div>
																	<div class='col-8 text-left'>

																									
																	</div>
																	<div class='col-12'>
																		<hr />
																	</div>
																</div>
															
															
															
															<?php
															}
														} else {
														?>
														<p>Nenhuma interação até o momento.</p>
														<?php						
														}
														?>												
												
												
												
												
											  </div>
											</div>												
												
									</div>
									<div class='col-12'>
										<hr />
									</div>
								</div>
							
							
							
							<?php
							}
						} else {
						?>
						<p>Nenhum pet cadastrado até o momento.</p>
						<?php						
						}
						?>
						
						</div>
					</div>

                    <div class="tab-pane" id="novo" role="tabpanel">
					</div>
                 
                    
                    <div class="tab-pane" id="adocao" role="tabpanel">
                      
                    </div>
                    <div class="tab-pane" id="perdidos" role="tabpanel">
                      
                    </div>                  
                    <div class="tab-pane" id="guia" role="tabpanel">				
                      
                    </div>
                    
                  </div>
                  
						               
						  
                </div>




						<div>
						  <ul class="nav nav-tabs fixed-bottom " role="tablist" style="" id='submenu'>
							
							<li class="nav-item" style="float:left">
							  <a class="nav-link" data-toggle="tab" href="../novo" data-target="#novo" role="tab" style=''>
								<i class="fa fas fa-plus" style='font-size:2em'></i><span><br>  Novo</span>
							  </a>
							</li>
							
							
							<li class="nav-item" style="float:left">
							  <a id='' class="nav-link" data-toggle="tab" href="../adocao" data-target="#adocao" role="tab" style=''>
								<i class="fa fas fa-heart" style='font-size:2em'></i><span><br>  Adoção</span>
							  </a>
							</li>
							
							<li class="nav-item" style="float:left">
							  <a class="nav-link" data-toggle="tab" href="../perdidos" data-target="#perdidos" role="tab" style="">
								<i class="fa fas fa-search" style='font-size:2em'></i><span><br>  Perdidos</span>
							  </a>
							</li>
							<li class="nav-item" style="float:left">
							  <a class="nav-link" data-toggle="tab" href="../guia" data-target="#guia" role="tab" style=''>
								<i class="fa fas fa-map" style='font-size:2em'></i><span><br> Guia</span>
							  </a>
							</li>
							
						  </ul>
						</div>   



                
              </div>
			
			
            
            
            </div>
         
       
                       
              
                     
              
              
           </div>
         

 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>   
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>  
  <script>

	function adotaPet(pet, pessoa){
	
					bootbox.hideAll()
					var dialog = bootbox.dialog({ 
						title: "Confirmação", 
						message: pessoa+' irá adotar o Pet?',
						buttons: {
							
							ok: {
							  label: "Sim",
							  className: "btn-primary",
							  callback: function() {
								dialog.modal('hide');
							  }
							},
							ok2: {
							  label: "Não",
							  className: "btn-primary",
							  callback: function() {
								dialog.modal('hide');
							  }
							}
						},					
						onEscape: function() {
							dialog.modal('hide');
						}		  
							
					});		
	}

	function cancelaInteressePet(pet, pessoa){
					bootbox.hideAll()
					var dialog = bootbox.dialog({ 
						title: "Confirmação", 
						message: 'Não tem interesse na adoção por parte de ' + pessoa + '?',
						buttons: {
							
							ok: {
							  label: "Sim",
							  className: "btn-primary",
							  callback: function() {
								dialog.modal('hide');
							  }
							},
							ok2: {
							  label: "Não",
							  className: "btn-primary",
							  callback: function() {
								dialog.modal('hide');
							  }
							}
						},					
						onEscape: function() {
							dialog.modal('hide');
						}		  
							
					});		
	}

	$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
	  var url = $(this).attr("href"); // the remote url for content
	  var target = $(this).data("target"); // the target pane
	  var tab = $(this); // this tab
	  
	  // ajax load from data-url
	  $(target).load(url,function(result){      
		tab.tab('show');
	  });
	});

	// initially activate the first tab..
	$('#tabIni').click();  
  </script>  
</body>

</html>
