<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    EncontraPet - Pessoas - Cadastrar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../../assets/css/encontrapet.css" rel="stylesheet" />
  
<style type="text/css">

</style>
</head>

<body style="padding-top:20px">


	<div class="col-12 col-lg-4 offset-lg-4" data-background-color="orange" style='padding-top:30px; padding-bottom:30px; '>
		<form class="form" method="" action="" id='formPrincipal' name='formPrincipal'>
		  
		  
		  				<div class="row">
							<div class="col-12 text-center">
								<i class="fas fa-paw" style='font-size:5em'></i>
								<h1 class="">EncontraPet</h1>
								
								<h3 class="card-title title-up" style='width:100%; text-align:center'>Informe seus dados para Cadastro</h3>               
							</div>    
						</div>				                  
						<div class="row">
							<div class="col-12">
												 
												 

								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="now-ui-icons users_circle-08"></i>
									  </span>
									</div>
									<input type="text" name='nome' id='nome' class="form-control" placeholder="Nome">
								  </div>
								  
								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="now-ui-icons ui-1_email-85"></i>
									  </span>
									</div>
									<input type="text" name='email' id='email' class="form-control" placeholder="Email">
								  </div>
								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="fas fa-key"></i>
									  </span>
									</div>
									<input type="password" name='senha' id='senha' class="form-control" placeholder="Senha">
								  </div>
								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="fas fa-key"></i>
									  </span>
									</div>
									<input type="password" class="form-control" name='confirma_senha' id='confirma_senha' placeholder="Confirme sua senha">
								  </div>
								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="fas fa-phone"></i>
									  </span>
									</div>
									<input type="text" class="form-control" name='telefone' id='telefone' placeholder="Telefone">
								  </div>
								  
								  
								  <div class="text-center">
									<label for='especies_interesses' >Selecione o que deseja visualizar</label>
								  
								  </div>
								  
								  
								  <div class="input-group no-border">
									<div class="input-group-prepend">
									  <span class="input-group-text">
										<i class="fas fa-search"></i>
									  </span>
									</div>
									
									<select  class="form-control" name='especies_interesses' id='especies_interesses'>					
										
										<option value='0'>Cães e gatxs</option>
										<option value='1'>Apenas cães</option>
										<option value='2'>Apenas gatxs</option>
									</select>
								  </div>
								  
								  
								  
								
								<div class="text-center">
								  <button type='button' id='btnSalvarCuidador' name='btnSalvarCuidador' onclick='EnviarForm()' class="btn  btn-primary btn-simple btn-round  btn-lg">Cadastrar</button>
								</div>
															 
								 <div class="social-line text-center">
									  <br>
									<a style='' href="../../splash" class="">Voltar para o início</a>.
									
								  </div>
								 
								 
							
						</div>					  
						
		  
		  
		  
		</form>   
		
			
	</div>
 
 
 
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>  
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>   
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>  
  <script src="" type="text/javascript"></script>  
  <script src="index.js" type="text/javascript"></script>  
  <script type="text/javascript">
  
function EnviarForm(){
	var err = '';

	var quantidadeErros = 0;

	var mensagem = '';

	var tipoMensagem = 'cadastrado';
	var tipoMensagem2 = 'cadastrar';
	var dialog;
	
	if ($('#nome').val() == ''){
		quantidadeErros++;
		mensagem += '- Nome (obrigatório)<br />'
	}
	if ($('#email').val() == ''){
		quantidadeErros++;
		mensagem += '- Email (obrigatório)<br />'
	}
	if ($('#senha').val() == ''){
		quantidadeErros++;
		mensagem += '- Senha (obrigatório)<br />'
	}
	if ($('#confirma_senha').val() == ''){
		quantidadeErros++;
		mensagem += '- Confirmação de senha (obrigatório)<br />'
		
	} else {
		if ($('#confirma_senha').val() != $('#senha').val()){
			quantidadeErros++;
			mensagem += '- Confirmação de senha e senha não coincidem<br />'
		}
	}
	
	if (quantidadeErros>0){

			if (quantidadeErros>1){

				err = 'Foram encontrados os seguintes erros:';
			
			} else {

				err = 'Foi encontrado o seguinte erro:';

				
			}
			
			bootbox.hideAll()

			var dialog = bootbox.dialog({ 
				title: err, 
				message: mensagem,
				buttons: {
					
					ok: {
					  label: "OK",
					  className: "",
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
									
						mensagem = 'Seu cadastro realizado com sucesso.';													
							

						var dialog = bootbox.dialog({ 
							title: tituloMensagem, 
							message: mensagem,
							buttons: {
								
								inserir: {
								  label: "Ok",
								  className: "",
								  callback: function() {											
										document.location.href = "../../home";	
									
								  }
								
								}
							}		  
								
						});
					
									
						
								
				} else { //erro
								
						tituloMensagem = 'Erro:';
									
						tipo = 'erro';
									
						mensagem = 'Não foi possível realizar o cadastro.';
									
							
						bootbox.hideAll()
						var dialog = bootbox.dialog({ 
							title: tituloMensagem, 
							message: data,
							buttons: {
								
								ok: {
								  label: "Ok",
								  className: "btn-danger",
								  callback: function() {
									dialog.modal('hide');
								  }
								}
							}			  
								
						});
				}

		});					 		
	 }	
	
}
  
 	      
 jQuery(document).ready(function(){
	
	$("#telefone").mask("(99) 99999999?9"); 
	
	
		
	
	
});	 
  </script>  
</body>

</html>
