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

					  
                    <div class="tab-pane active" id="novo" role="tabpanel">
<form class="form" method="" action="" id='formPrincipal' name='formPrincipal'>
	<input type='hidden' name='operacao' id='operacao' value='inserir'>
							<div class='container text-left'>
								
							  
							  
											<div class="row">
												<div class="col-12">
													
													<h5 class="" style=''>Informe os dados da doação</h5>               
												</div>    
											</div>				                  
											<div class="row">
																		
												<div class="col-12">							
													  
														<label for='id_especies' style='display:block; '>Espécie?</label>
														
														<select  class="form-control" name='id_especies' id='id_especies'>					
															
															<option value=''>Selecione</option>
															<option value='1'>Cães</option>
															<option value='2'>Gatxs</option>
														</select>
												
												</div>							
											</div>	
											<div class="row" style='padding-top:10px'>						
												<div class="col-12">															  
													  
													<label for='vacinado' style='display:block; '>Nome:</label>
													<input type="text" name='nome' id='nome' class="form-control" placeholder="Informe um nome">
												</div>		  
											</div>	
											<div class="row" style='padding-top:10px'>			
												<div class="col-12">															  
													  
															<label for='sexo' style='display:block; '>Sexo?</label>
																							
														<select  class="form-control" name='sexo' id='sexo' style='display:block; '>					
															
															<option value='Não sei'>Não sei</option>
															<option value='Macho'>Macho</option>
															<option value='Fêmea'>Fêmea</option>
															
														</select>
													 							
												</div>
											</div>	
											<div class="row" style='padding-top:10px'>			
												<div class="col-12">															  
													  
															<label for='arquivo' style='display:block; '>Imagem:</label>
																							
																					
														
															<input id="arquivo"  class='arquivo' type="file"  accept="image/*"  name="arquivo">
																					
															<input type='hidden' id='imagem' name='imagem' value=''>
													 							
												</div>
											</div>	
											
											<div class="row" style='padding-top:10px'>		
												<div class="col-12">															  
													  
															<label for='descricao' style='display:block; '>Descreva o animal:</label>
														
																								  
													  
														<textarea  class="form-control" name='descricao' id='descricao' style='display:block; '></textarea>
													  
												</div>	
											</div>	
											<div class="row" style='padding-top:10px'>		
												<div class="col-12">															  
													  
															<label for='idade' style='display:block; '>Informe onde o animal se encontra:</label>
														
												</div>
											</div>	
											<div class="row" style='padding-top:10px'>		
												<div class="col-12">															  
													  <?php
													  
													  $objetoEstados = $gestor->retornarEstados('','','estados','uf','ASC');

														if ($objetoEstados){
															if (count($objetoEstados) < 2){
																$objetoEstados = array($objetoEstados);
															}
														}
														?>
														<select  class="form-control" name='estado' id='estado' style='display:block; ' onchange='mudaMunicipio(this.value)'>	
																			
															<option value=''>Selecione um estado</option>
															
															<?php 
															if($objetoEstados){
																foreach($objetoEstados as $obj) {  
																	
																	
																	?>							
																	<option value='<?=$obj->uf?>' ><?=$obj->nome?></option>

																<?php 
																}
															} 
															?>															
														</select>
													  
												</div>		  
											</div>	
											<div class="row" style='padding-top:10px'>		
												<div class="col-12" id='divMunicipio'>															  
													  
														<select  class="form-control" name='municipio' id='municipio' style='display:block; '>					
															<option value=''>Selecione uma cidade</option>
														</select>
													  
												</div>		  
											</div>	
											<div class="row" style='padding-top:10px'>		
												<div class="col-12" id='divBairro'>															  
													 
												</div>		  
											</div>	
											<div class="row" style='padding-top:10px'>			  
												<div class="col-12">															  
													  
															<label for='castrado' style='display:block; '>Castrado?</label>
														
																					
														<select  class="form-control" name='castrado' id='castrado' style='display:block; '>					
															
															<option value='Não sei'>Não sei</option>
															<option value='Sim'>Sim</option>
															<option value='Não'>Não</option>										
														</select>
													  							
												</div>
											</div>	
											<div class="row" style='padding-top:10px'>				  
												<div class="col-12">															  
													  
															<label for='vermifugado' style='display:block; '>Vermifugado?</label>
														
																									  
													  
														<select  class="form-control" name='vermifugado' id='vermifugado' style='display:block; '>					
															
															<option value='Não sei'>Não sei</option>
															<option value='Sim'>Sim</option>
															<option value='Não'>Não</option>
															
														</select>
													  
												</div>	
											</div>	
											<div class="row" style='padding-top:10px'>			  
												<div class="col-12">															  
													  
															<label for='vacinado' style='display:block; '>Vacinado?</label>
														
																										  
													  
														<select  class="form-control" name='vacinado' id='vacinado' style='display:block; '>					
															
															<option value='Não sei'>Não sei</option>
															<option value='Sim'>Sim</option>
															<option value='Não'>Não</option>
															
														</select>
													  
												</div>
											</div>	
											<div class="row" style='padding-top:10px'>				  
												<div class="col-12">															  
													  
															<label for='idade' style='display:block; '>Idade?</label>
														
																									  
													  
														<select  class="form-control" name='idade' id='idade' style='display:block; '>					
															<option value='Não sei'>Não sei</option>
															<option value='1 a 6 meses'>1 a 6 meses</option>
															<option value='6 meses a 1 ano'>6 meses a 1 ano</option>
															<option value='1 a 2 anos'>1 a 2 anos</option>
															<option value='2 a 3 anos'>2 a 3 anos</option>
															<option value='3 a 4 anos'>3 a 4 anos</option>
															<option value='5 ou mais anos'>5 ou mais anos</option>
															
														</select>
													  
												</div>		  
											</div>	
											<div class="row" style='padding-top:10px'>		
												<div class="col-12">	  
																					  
													  
													  
													  
													
													<div class="text-center">
													  <button type='button' id='btnCancelar' name='btnCancelar' onclick='CancelarForm()' class="btn  btn-primary btn-round btn-lg">Cancelar</button>
													  <button type='button' id='btnDoar' name='btnDoar' onclick='EnviarForm()' class="btn  btn-primary btn-round btn-lg">Cadastrar</button>
													  
													</div>
																				 
													 
													 
													 
												
												</div>					  
											</div>					  
											
							  
							  
							  
							
						</div>				
						</form> 
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
							  <a id='tabIni'  class="nav-link active" data-toggle="tab" href="../novo" data-target="#novo" role="tab" style=''>
								<i class="fa fas fa-plus" style='font-size:2em'></i><span><br>  Novo</span>
							  </a>
							</li>
							
							
							<li class="nav-item" style="float:left">
							  <a class="nav-link" href="../home" role="tab" style=''>
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
  <script>
function EnviarForm(){
	
	var err = '';

	var quantidadeErros = 0;

	var mensagem = '';

	var tipoMensagem = '';


	tipoMensagem = 'inserido';

	tipoMensagem2 = 'inserir';
	
	
	if ($('#nome').val() == ''){
		quantidadeErros++;
		mensagem += '- Nome (obrigatório)<br />'
	}
	
	if ($('#imagem').val() == ''){
		quantidadeErros++;
		mensagem += '- Imagem (obrigatório)<br />'
	}
	if ($('#descricao').val() == ''){
		quantidadeErros++;
		mensagem += '- Descrição (obrigatório)<br />'
	}


	if (quantidadeErros>0){

		if (quantidadeErros>1){

			err = 'Foram encontrados os seguintes erros:';
		
		} else {

			err = 'Foi encontrado o seguinte erro:';

			
		}

		
		//bootbox.hideAll();

		var dialog = bootbox.dialog({ 
			title: err, 
			message: mensagem,
			buttons: {
				
				ok: {
				  label: "OK",
				  className: "btn-primary",
				  callback: function() {
					dialog.modal('hide');
				  }
				}
			}
		});	
	
			
		

	 } else {
		

		$.post('process.php',$('#formPrincipal').serialize(),
		
		function(data){					   
							
			if(data > 0){ // 1 ou maior 
							
				tituloMensagem = 'Sucesso:';
								
				tipo = 'sucesso';
							
				mensagem = 'Pet colocado para Adoção com sucesso.';													
					
		
				var dialog = bootbox.dialog({ 
					title: tituloMensagem, 
					message: mensagem,
					buttons: {
						
						inserir: {
						  label: "Cadastrar outro",
						  className: "btn-primary",
						  callback: function() {
							document.location.href = '../doar';
						  }
						},
						listar: {
						  label: "OK",
						  className: "btn-primary",
						  callback: function() {
							document.location.href = '../pets';
						  }
						}
					},					
					onEscape: function() {
						document.location.href = '../doar';
					}
				});
				
						
					
					
							
			} else { //erro
							
				tituloMensagem = 'Erro:';
							
				tipo = 'erro';
							
				mensagem = 'Não foi possível cadastrar o pet.';
							
					
					bootbox.hideAll()
					var dialog = bootbox.dialog({ 
						title: tituloMensagem, 
						message: mensagem,
						buttons: {
							
							ok: {
							  label: "Ok",
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
							
			
							
		});					 
	}
}		  
		  
	function autocomplete(inp, arr) {
	  /*the autocomplete function takes two arguments,
	  the text field element and an array of possible autocompleted values:*/
	  var currentFocus;
	  /*execute a function when someone writes in the text field:*/
	  inp.addEventListener("input", function(e) {
		  var a, b, i, val = this.value;
		  /*close any already open lists of autocompleted values*/
		  closeAllLists();
		  if (!val) { return false;}
		  currentFocus = -1;
		  /*create a DIV element that will contain the items (values):*/
		  a = document.createElement("DIV");
		  a.setAttribute("id", this.id + "autocomplete-list");
		  a.setAttribute("class", "autocomplete-items");
		  /*append the DIV element as a child of the autocomplete container:*/
		  this.parentNode.appendChild(a);
		  /*for each item in the array...*/
		  for (i = 0; i < arr.length; i++) {
			/*check if the item starts with the same letters as the text field value:*/
			if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
			  /*create a DIV element for each matching element:*/
			  b = document.createElement("DIV");
			  /*make the matching letters bold:*/
			  b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
			  b.innerHTML += arr[i].substr(val.length);
			  /*insert a input field that will hold the current array item's value:*/
			  b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
			  /*execute a function when someone clicks on the item value (DIV element):*/
				  b.addEventListener("click", function(e) {
				  /*insert the value for the autocomplete text field:*/
				  inp.value = this.getElementsByTagName("input")[0].value;
				  /*close the list of autocompleted values,
				  (or any other open lists of autocompleted values:*/
				  closeAllLists();
			  });
			  a.appendChild(b);
			}
		  }
	  });
	  /*execute a function presses a key on the keyboard:*/
	  inp.addEventListener("keydown", function(e) {
		  var x = document.getElementById(this.id + "autocomplete-list");
		  if (x) x = x.getElementsByTagName("div");
		  if (e.keyCode == 40) {
			/*If the arrow DOWN key is pressed,
			increase the currentFocus variable:*/
			currentFocus++;
			/*and and make the current item more visible:*/
			addActive(x);
		  } else if (e.keyCode == 38) { //up
			/*If the arrow UP key is pressed,
			decrease the currentFocus variable:*/
			currentFocus--;
			/*and and make the current item more visible:*/
			addActive(x);
		  } else if (e.keyCode == 13) {
			/*If the ENTER key is pressed, prevent the form from being submitted,*/
			e.preventDefault();
			if (currentFocus > -1) {
			  /*and simulate a click on the "active" item:*/
			  if (x) x[currentFocus].click();
			}
		  }
	  });
	  function addActive(x) {
		/*a function to classify an item as "active":*/
		if (!x) return false;
		/*start by removing the "active" class on all items:*/
		removeActive(x);
		if (currentFocus >= x.length) currentFocus = 0;
		if (currentFocus < 0) currentFocus = (x.length - 1);
		/*add class "autocomplete-active":*/
		x[currentFocus].classList.add("autocomplete-active");
	  }
	  function removeActive(x) {
		/*a function to remove the "active" class from all autocomplete items:*/
		for (var i = 0; i < x.length; i++) {
		  x[i].classList.remove("autocomplete-active");
		}
	  }
	  function closeAllLists(elmnt) {
		/*close all autocomplete lists in the document,
		except the one passed as an argument:*/
		var x = document.getElementsByClassName("autocomplete-items");
		for (var i = 0; i < x.length; i++) {
		  if (elmnt != x[i] && elmnt != inp) {
		  x[i].parentNode.removeChild(x[i]);
		}
	  }
	}
	/*execute a function when someone clicks in the document:*/
	document.addEventListener("click", function (e) {
		closeAllLists(e.target);
	});
	}	  
	  
	  
	function mudaMunicipio(uf){
				  
			   
			  
			  $('#divMunicipio').load('municipios.php?uf='+uf);
			
	}		
	function mudaBairro(municipio, uf){
				  
			   var municipio = $('#municipio :selected').val();
			   var uf = $('#estado :selected').val();
			 // alert(municipio);
			  $('#divBairro').load('bairros.php?municipio='+municipio+'&uf='+uf);
			
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
	//$('#tabIni').click();  
	
	//$('').load(url,function(result){      
	//	tab.tab('show');
	 // });
	 
	function enviaArquivo(){

		$.ajax( {
		  url: 'process.php?operacao=inserir_arquivo',
		  type: 'POST',
		  data: new FormData($("#formPrincipal")[0]),
		  processData: false,
		  success: function( data, textStatus ){		  

				if (data != "0"){ // sucesso					
				   
					
					$( "#imagem" ).after( "<img src='../uploads/tmp/"+data+"' width='300px' style='margin:0 auto; display:block' />" );
				
			
							
					$( "#imagem" ).val(data);
				} else {


					alert(data);
					
				}
			  
		  },
		  contentType: false
		});
		
	}	 
	  
	 $(document).ready(function() {
		
			var files;
			// Add events
			$('input[type=file]').on('change', enviaArquivo);  
	  
	   });
  </script>  
</body>

</html>
