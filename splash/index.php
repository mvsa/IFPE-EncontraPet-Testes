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
    EncontraPet - Início
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/css/encontrapet.css" rel="stylesheet" />
  
<style type="text/css">

</style>
</head>

<body style="padding-top:20px">
<form id="frmLogin" name="frmLogin" enctype="text/plain" > 
			<div class="col-12 col-lg-4 offset-lg-4 text-center" data-background-color="orange" style='padding-top:30px; padding-bottom:30px; '>
              
                <div class="">    
					<i class="fas fa-paw" style='font-size:5em'></i>
					<h1 class="">EncontraPet</h1>
				</div>
                
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email..." name='email' id='email'>
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control" placeholder="Senha" name='senha' id='senha'>
                  </div>
                  <div class="social-line">
						<button id="btnEntrar" type='button' class="btn btn-primary btn-simple  btn-round btn-lg" >Entrar</button>
                    <a href="#" class="btn btn-primary btn-simple  btn-facebook btn-icon btn-lg btn-round">
                      <i class="fab fa-facebook-square" style='color:#fff'></i>
                    </a>
                  </div> 
                  <div class="social-line">
                    <a style='' href="../pessoas/cadastrar" class="btn btn-primary btn-simple  btn-round btn-lg">Cadastrar</a>
                    <a href="../pessoas/esqueci" class="btn btn-primary btn-simple btn-round btn-lg">Esqueci minha senha</a>
                  </div>
                  <div class="social-line">
					  <br>
                    <a style='' href="../empresas" class="">Sou uma empresa ou ONG</a>.
                    
                  </div>
                                  
				               
              
            </div>
         

 </form>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>  
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>   
  <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>  
  <script type="text/javascript">
function EnviarForm(){
	
	var err = '';	
	var quantidadeErros = 0;	
	var mensagem = '';	
	var tipoMensagem = '';	

	if ($('#email').val() == ''){
		quantidadeErros++;
		mensagem += '- Email (obrigatório)<br />'
	}
	if ($('#senha').val() == ''){
		quantidadeErros++;
		mensagem += '- Senha (obrigatório)<br />'
	}
	if (quantidadeErros>0){
		if (quantidadeErros>1){
			err = 'Foram encontrados os seguintes erros:<br>';
		} else {
			err = 'Foi encontrado o seguinte erro:<br>';
		}

	
		bootbox.hideAll();

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
		 
		$.post('process.php', $('#frmLogin').serialize(),					
		   function(data){	
			  			//alert(data);   												
			   if(data > 0){ // 1 ou maior 
				   
				    
				   												
			   		if (data == 1){
						document.location.href = "../home";												
					}

				 									
			   } else { //erro												
				   tituloMensagem = 'Erro';												
				   tipo = 'erro';												
				   mensagem = 'Email ou senha inválidos.';	
					
					
					bootbox.hideAll()

					var dialog = bootbox.dialog({ 
						title: tituloMensagem, 
						message: data,
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
					
								
				   return false;				   											
			   }	

				
		});	
						 
	}
	return false;
}
    
jQuery(document).ready(function(){

		 $('#btnEntrar').bind('click',function(e){
			
			EnviarForm();
			//return false;
		});	
	
});	  
  
  
  
  </script>  
</body>

</html>
