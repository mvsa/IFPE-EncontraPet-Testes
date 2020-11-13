<?php 
ob_start();
session_start();

/**
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 21-01-2020 as 09:00:30
*/

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
							  <a id='tabIni' class="nav-link" data-toggle="tab" href="../adocao" data-target="#adocao" role="tab" style=''>
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
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>  
  <script>

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
