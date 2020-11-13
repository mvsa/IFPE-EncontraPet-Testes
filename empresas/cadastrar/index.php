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
    EncontraPet - Empresas - Cadastrar
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- Custom CSS -->
  <link href="../../assets/css/encontrapet.css" rel="stylesheet" />
  
<style type="text/css">

</style>
</head>

<body style="padding-top:20px">


	<div class="col-12 col-lg-4 offset-lg-4" data-background-color="orange" style='padding-top:30px; padding-bottom:30px; '>
	  
	 

		  <!-- Tab panes -->
			<div class="tab-content">
				
					<div role="tabpanel" class="tab-pane active" id="inicio">
					
						<div class="row">
							<div class="col-12 text-center">
								<i class="fas fa-paw" style='font-size:5em'></i>
								<h1 class="">EncontraPet</h1>
								
								<h3 class="card-title title-up" style='width:100%; text-align:center'>Como você se identifica?</h3>               
							</div>    
						</div>				                  
						<div class="row">
							<div class="col-12">
								 
								  <a href="#empresa" role="tab" data-toggle="tab" class="btn btn-neutral btn-round btn-lg" style='display:block;'>Empresa</a>
								
								  <a href="#ong" role="tab" data-toggle="tab" class="btn btn-neutral btn-round btn-lg" style='display:block;'>ONG</a>
							</div>
						</div>
						
											   
						<div class="row">
							<div class="col-12" style='margin-top:20px'>
								  <a href="../" class="" style='font-size:3.2em; '><i class='fa fa-chevron-left'></i></a>					
							</div>
						</div>   
					
					</div>					
					
					
					 
					<div role="tabpanel" class="tab-pane fade" id="empresa">
			  
						<div class="row">
							<div class="col-12 text-center">
								<i class="fas fa-paw" style='font-size:5em'></i>
								<h1 class="">EncontraPet</h1>
								
								<h3 class="card-title title-up" style='width:100%; text-align:center'>Cadastro</h3>               
							</div>    
						</div>	
							<div class="row">
								<div class="col-12">
																 
								<form class="form" method="" action="" id='formSecundario' name='formSecundario'>				 

									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-briefcase"></i>
											
										  </span>
										</div>
										<input type="text" name='nome' id='nome2'  class="form-control" placeholder="Empresa">
									  </div>
									  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="now-ui-icons users_circle-08"></i>
										  </span>
										</div>
										<input type="text" name='responsavel' id='responsavel1'  class="form-control" placeholder="Responsável">
									  </div>
									  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="now-ui-icons ui-1_email-85"></i>
										  </span>
										</div>
										<input type="text" name='email' id='email2' class="form-control" placeholder="Email">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-key"></i>
										  </span>
										</div>
										<input type="password" name='senha' id='senha2' class="form-control" placeholder="Senha">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-key"></i>
										  </span>
										</div>
										<input type="password" class="form-control" name='confirma_senha' id='confirma_senha2' placeholder="Confirme sua senha">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-phone"></i>
										  </span>
										</div>
										<input type="text" class="form-control" name='telefone' id='telefone2' placeholder="Telefone">
									  </div>
									  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-building"></i>
										  </span>
										</div>
										<select  class="form-control" name='tipo_empresa' id='tipo_empresa'>					
											<option selected=true disabled>Selecione o Tipo da empresa</option>
											<option value="2" style = "color:black">Petshop</option>
											<option value="4" style = "color:black">Casa de ração</option>
											<option value="3" style = "color:black">Clinica veterinária</option>
											<option value="5" style = "color:black">Outros</option>
										</select>
									  </div>
									  
									</form>  
									
									<div class="text-center">
										<button type='button' id='btnSalvarEmpresa' name='btnSalvarEmpresa' onclick='EnviarForm2()' class="btn btn-neutral btn-round btn-lg">Salvar</button>
									</div>
														 
						 
								</div>
							</div>					  
							<div class="row">
								<div class="col-12" style='margin-top:20px'>
									  <a href="#inicio" role="tab" data-toggle="tab" style='font-size:3.2em; '><i class='fa fa-chevron-left'></i></a>					
								</div>
							</div>   					  
					  
					</div>
					<div role="tabpanel" class="tab-pane fade" id="ong">
			  
			  
			  
							<div class="row">
								<div class="col-12 text-center">
									<i class="fas fa-paw" style='font-size:5em'></i>
									<h1 class="">EncontraPet</h1>
									
									<h3 class="card-title title-up" style='width:100%; text-align:center'>Cadastro</h3>               
								</div>    
							</div>	
							<div class="row">
								<div class="col-12">					  
									<form class="form" method="" action="" id='formTerciario' name='formTerciario'>  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-briefcase"></i>
											
										  </span>
										</div>
										<input type="text" name='nome' id='nome3'  class="form-control" placeholder="Nome da Ong">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-search"></i>
										  </span>
										</div>
										<select  class="form-control"  name='visualizar' id='visualizar2'>					
											<option selected=true disabled>Selecione o tipo</option>
											<option value="1" style = "color:black">Cães e gatos</option>
											<option value="2" style = "color:black">Cães</option>
											<option value="3" style = "color:black">Gatos</option>
										</select>
									  </div>
									  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="now-ui-icons users_circle-08"></i>
										  </span>
										</div>
										<input type="text" name='responsavel' id='responsavel2'  class="form-control" placeholder="Responsável">
									  </div>
									  
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="now-ui-icons ui-1_email-85"></i>
										  </span>
										</div>
										<input type="text" name='email' id='email3' class="form-control" placeholder="Email">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-key"></i>
										  </span>
										</div>
										<input type="password" name='senha' id='senha3' class="form-control" placeholder="Senha">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-key"></i>
										  </span>
										</div>
										<input type="password" class="form-control" name='confirma_senha' id='confirma_senha3' placeholder="Confirme sua senha">
									  </div>
									  <div class="input-group no-border">
										<div class="input-group-prepend">
										  <span class="input-group-text">
											<i class="fas fa-phone"></i>
										  </span>
										</div>
										<input type="text" class="form-control" name='telefone' id='telefone3' placeholder="Telefone">
									  </div>
									  
									</form> 
									  
									
									<div class="text-center">
									<button type='button' id='btnSalvarOng' name='btnSalvarOng' onclick='EnviarForm3()' class="btn btn-neutral btn-round btn-lg">Salvar</button>
									</div>
																 
									 
									 
						 
				
								</div>					  
							</div>					  
							<div class="row">
								<div class="col-12" style='margin-top:20px'>
									  <a href="#inicio" role="tab" data-toggle="tab" style='font-size:3.2em; '><i class='fa fa-chevron-left'></i></a>					
								</div>
							</div>   					  
					  
					</div>
			</div>  
		  
		
			
	</div>
 
 
 
  <!--   Core JS Files   -->
  <script src="../../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>   
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>  
  <script src="index.js" type="text/javascript"></script>  
 


</body>

</html>
