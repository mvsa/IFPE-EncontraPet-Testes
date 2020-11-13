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
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Petfinder - Estudo de layout
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  
<style type="text/css">

/* Palette color codes */

.primary-1 { background-color: #FFA082 }
.primary-2 { background-color: #FF8058 }
.primary-0 { background-color: #F96232 }
.primary-3 { background-color: #DC3D0A }
.primary-4 { background-color: #AC2A00 }

.secondary-1-1 { background-color: #FFC782 }
.secondary-1-2 { background-color: #FFB458 }
.secondary-1-0 { background-color: #F9A032 }
.secondary-1-3 { background-color: #DC7E0A }
.secondary-1-4 { background-color: #AC5F00 }

.secondary-2-1 { background-color: #6CA6C9 }
.secondary-2-2 { background-color: #4387AF }
.secondary-2-0 { background-color: #27729F }
.secondary-2-3 { background-color: #0E5D8C }
.secondary-2-4 { background-color: #06476E }

.complement-1 { background-color: #6BD29E }
.complement-2 { background-color: #41BD7E }
.complement-0 { background-color: #23AF68 }
.complement-3 { background-color: #079B50 }
.complement-4 { background-color: #00793C }

/* end */

.color-table {
	margin: 2em 2em 5em;
	border-collapse:collapse;
	border:none;
	border-spacing:0;
	font-size:100%;
	}
.color-table th {
	padding: 0 1em 0 0;
	text-align: right;
	vertical-align: middle;
	font-size: 100%;
	font-weight: normal;
	border: none;
	}
.color-table td.sample {
	width:6em; height:6em;
	padding: 10px;
	text-align:center;
	vertical-align:middle;
	font-size:90%;
	border: 1px solid white;
	white-space:nowrap;
	}
.color-table td.sample-0 {
	width:18em;
	}
.color-table.small td.sample {
	width:3em; height:3em;
	padding:0;
	border:none;
	}
.color-table.small td.sample-0 {
	width:9em;
	}
.color-table .white { margin-bottom:0.2em; color:white }
.color-table .black { margin-top:0.2em; color:black }
 #map {
        height: 100%;
      }

</style>
</head>

<body class="index-page sidebar-collapse" onload="initialize()">
  
  
  
      
  
  <div class="wrapper">
  
  
  
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" style="background-image:url('../assets/img/hero-image.jpg');">
      </div>
      <div class="container">
        <div class="content-center brand">
          <i class="fas fa-paw" style='font-size:5em'></i>
          <h1 class="">PetFinder</h1>
          <h3>Uma plataforma para quem deseja doar ou adotar um animal de estimação.</h3>
        </div>
        
      </div>
    </div>
    <div class="main">
      <div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">              
              <div class="hero-images-container-1">
                <img src="../assets/img/hero-image-2.png" alt="">
              </div>
              <div class="hero-images-container-2">
                <img src="../assets/img/hero-image-3.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>

     
      <div class="section section-examples" data-background-color="black">
        <div class="space-50"></div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              
              <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Login</h3>
   <div class="card card-signup" data-background-color="orange" style='padding-top:30px; padding-bottom:30px; '>
              <form class="form" method="" action="">
                <div class="card-header text-center">    
					<i class="fas fa-paw" style='font-size:5em'></i>
					<h1 class="">PetFinder</h1>
					
				
				</div>
                <div class="card-body">
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Senha">
                  </div>
                  <div class="social-line">
					  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Entrar</a>
                    <a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round">
                      <i class="fab fa-facebook-square"></i>
                    </a>
                    
                    <a href="#pablo" class="btn btn-neutral btn-round btn-sm">Cadastrar</a>
                    <a href="#pablo" class="btn btn-neutral btn-round btn-sm">Esqueci minha senha</a>
                  </div>
                  
                  
                  
                </div>
                
				               
              </form>
            </div>
         
                       
              
              
              
            </div>
            <div class="col">
              
                <h3 class="card-title title-up text-center" style='display:block; width:100%;'>seleção de tipo de Cadastro</h3>
   <div class="card card-signup" data-background-color="orange" style='padding-top:30px; padding-bottom:30px; '>
              <form class="form" method="" action="">
				<div class="card-header text-center">    
					<i class="fas fa-paw" style='font-size:5em'></i>
					<h1 class="">PetFinder</h1>
					
					<h3 class="card-title title-up" style='width:100%; text-align:center'>Como você se identifica?</h3>               
				</div>				                  
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg" style='display:block; margin:10px'>Pessoa</a>
                
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg" style='display:block; margin:10px'>Empresa</a>
                
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg" style='display:block; margin:10px'>Ong</a>
                </div>
              </form>
           
            </div>
         
                       
              
              
              
            </div>
         
          </div>
          
          <div class="row" style='padding-top:30px; '>
            <div class="col">
              
                <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Cadastro Pessoas</h3>
            <div class="col-md-12" style='background: #FF8160; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0'>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            

			<form class="form" method="" action="">
                
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Nome">
                  </div>
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email...">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Senha">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Telefone">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-search"></i>
                      </span>
                    </div>
                    <select  class="form-control" name='' id=''>					
						<option>Selecione o que deseja visualizar</option>
						<option>Cães e gatos</option>
						<option>Cães</option>
						<option>Gatos</option>
					</select>
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Salvar</a>
                </div>
              </form>
          
            
            
            </div>
          </div>
          
        </div>

                       
              
              
              
            </div>
            <div class="col">
              
   

                <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Cadastro Empresas</h3>
            <div class="col-md-12" style='background: #FF8160; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0'>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            

			<form class="form" method="" action="">
                
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-briefcase"></i>
                        
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Empresa">
                  </div>
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Responsável">
                  </div>
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Senha">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Telefone">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-building"></i>
                      </span>
                    </div>
                    <select  class="form-control" name='' id=''>					
						<option>Selecione o Tipo da empresa</option>
						<option>Petshop</option>
						<option>Casa de ração</option>
						<option>Clinica veterinária</option>
						<option>Outros</option>
					</select>
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Salvar</a>
                </div>
              </form>
          
            
            
            </div>
          </div>
          
        </div>

                       
              
                                   
              
              
              
            </div>
            <div class="col">
             
             
     
                <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Cadastro ONGS</h3>
            <div class="col-md-12" style='background: #FF8160; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0'>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            


			<form class="form" method="" action="">
                
                <div class="card-body">
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-bullhorn"></i>
                        
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="ONG">
                  </div>
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Responsável">
                  </div>
                  
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons ui-1_email-85"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Email">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-key"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Senha">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-phone"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Telefone">
                  </div>
                  <div class="input-group no-border">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="fas fa-paw"></i>
                      </span>
                    </div>
                    <select  class="form-control" name='' id=''>					
						<option>Selecione o Tipo da ONG</option>
						<option>Cães e gatos</option>
						<option>Cães</option>
						<option>Gatos</option>
						<option>Outros</option>
					</select>
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Salvar</a>
                </div>
              </form>
          
            
            
            </div>
         
         
          </div>
          
        </div>

                       
              
            
             
            </div>
         
          </div>
        
          
          <div class="row" style='padding-top:30px'>
            <div class="col-12 col-md-4">
              
              

         <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Visualização dos PETS</h3>
            <div class="col-md-12" style='background: #FFA082; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0; margin-bottom:0; '>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            


			
              <!-- Nav tabs -->
              <div style="">
                <div>
                  <ul class="nav nav-tabs justify-content-center" role="tablist" style="padding:0; font-size:0.8em; padding-top:7px; padding-bottom:7px;  " id='submenu'>
                    <li class="nav-item" style="max-width:100px; float:left">
                      <a class="nav-link active" data-toggle="tab" href="#home" role="tab" style='padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;'>
                        <i class="fa fas fa-paw"></i> Adoção
                      </a>
                    </li>
                    
                    <li class="nav-item" style="max-width:110px; float:left">
                      <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" style="padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;">
                        <i class="fa fas fa-search"></i> Perdidos
                      </a>
                    </li>
                    <li class="nav-item" style="max-width:100px; float:left	">
                      <a class="nav-link" data-toggle="tab" href="#settings1" role="tab" style='padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;'>
                        <i class="now-ui-icons shopping_shop"></i> Guia
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="card-body" style='padding-left:3px; padding-right:3px; padding-top:5px'>
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane active" id="home" role="tabpanel">



		
			
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div style='width:100%; display:block; height:100px; position:absolute; z-index:999;'>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style='padding-top:100px; padding-bottom:100px; font-size:2em; font-weight:bold; position:relative; float:left;'>
								  <i class="now-ui-icons arrows-1_minimal-left"></i>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style='padding-top:65px; padding-bottom:105px; font-size:2em; font-weight:bold; position:relative; float:right;'>
								  <i class="now-ui-icons arrows-1_minimal-right"></i>
								</a>
							</div>
							<div class="carousel-inner" role="listbox" style='background:rgba(255,255,255,0.3)'>
								
							  <div class="carousel-item active">
								<img class="d-block" src="../assets/img/pets/dog-1.jpg" alt="Dog 2">
								<div class="carousel-caption d-none d-md-block" style=''>
									  <h5 class='tituloPet' style='color:#333'>Dolynho</h5>
									  <p style='color:#111'>I think that’sI think that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="../assets/img/pets/dog-2.jpg" alt="Dog 2">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Tinico</h5>
								   <p style='color:#111'>wer  er that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="../assets/img/pets/cat-2.jpg" alt="Cat 2">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Fuá</h5>
								   <p style='color:#111'>asdasd vnk that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="../assets/img/pets/dog-3.jpg" alt="Dog 3">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Cuíca</h5>
								   <p style='color:#111'>That's all fine.</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							</div>
							
							
						  </div>
            			
	
						
                      
                    </div>
                    
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <p>Em breve...</p>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel">
                      <p>
                        Guia das empresa/ongs com google maps
                      </p>
                    </div>
                  </div>
                </div>
              </div>
			
			
            
            
            </div>
         
         
          </div>
          
        </div>

                       
              
              
              
              
            </div>
         
         
            <div class="col-12 col-md-4">
              

  
     
                <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Cadastro PETS</h3>
            <div class="col-md-12" style='background: #FF8160; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0'>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            


			<form class="form" method="" action="">
                
                <div class="card-body">
                  <div class="input-group no-border">
                    
                    <input type="text" class="form-control" placeholder="Nome">
                  </div>
                  
                  <div class="input-group no-border">
					   <small style='display:block; font-size:0.8em'>Selecione uma imagem</small>
                  </div>
                  <div class="input-group no-border">
                    
                   <input type="file" class="form-control" style='display:block' placeholder="Imagem">
                  </div>
                  
                  <div class="input-group no-border">
                    <select  class="form-control" name='' id=''>					
						<option>Selecione o Tipo</option>
						
						<option>Cão</option>
						<option>Gato</option>
						
					</select>
                  </div>
                  
                  <div class="input-group no-border">
                    <select  class="form-control" name='' id=''>					
						<option>Selecione o Sexo</option>
						
						<option>Macho</option>
						<option>Femea</option>
						<option>Não sei</option>
						
					</select>
                  </div>
                  <div class="input-group no-border">
                    <select  class="form-control" name='' id=''>					
						<option>Selecione a Idade</option>
						
						<option>Não sei</option>
						<option>0 a 1 anos</option>
						<option>1 a 2 anos</option>
						<option>2 a 3 anos</option>
						<option>Mais de 3 anos</option>
						
					</select>
                  </div>
                  <div class="input-group no-border">
                    <select  class="form-control" name='' id=''>					
						<option>Animal castrado?</option>
						
						<option>Sim</option>
						<option>Não</option>
						<option>Não sei</option>
						
					</select>
                  </div>
                  <div class="input-group no-border">
                    <select  class="form-control" name='' id=''>					
						<option>Selecione a Situação</option>
						
						
						
						<option>Para adoção</option>
						<option>Achado</option>
						<option>Perdido</option>
						
					</select>
                  </div>
                  
                  
                  
                </div>
                <div class="card-footer text-center">
                  <a href="#pablo" class="btn btn-neutral btn-round btn-lg">Salvar</a>
                </div>
              </form>
          
            
            
            </div>
         
         
          </div>
          
        </div>

                       
              
            
             
            </div>
         

			<div class="col-12 col-md-4">
              
              

                <div class="container" id="menu-dropdown">
          <div class="row">
           <h3 class="card-title title-up text-center" style='display:block; width:100%;'>Visualização dos PETS</h3>
            <div class="col-md-12" style='background: #FFA082; padding:0'>             
              <nav class="navbar navbar-expand-lg bg-primary" style='padding:0; margin-bottom:0; '>
                <div class="container">
                  <a class="navbar-brand" href="#"><i class="fas fa-paw" style='font-size:1.5em'>&nbsp;</i> PetFinder</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-icons" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="example-navbar-icons">
                    <ul class="navbar-nav ml-auto">
                      
                      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                          <i class="fas fa-bars"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                          
                          <a class="dropdown-item" href="#">Adotar</a>
                          <a class="dropdown-item" href="#">Doar</a>
                          <a class="dropdown-item" href="#">Guia</a>
                          <a class="dropdown-item" href="#">Grupos</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Favoritos</a>
                          <a class="dropdown-item" href="#">Histórico</a>
                          <a class="dropdown-item" href="#">Meus pets</a>
                          <a class="dropdown-item" href="#">Meus cadastro</a>
                          <div class="divider"></div>
                          <a class="dropdown-item" href="#">Anunciar</a>
                          <a class="dropdown-item" href="#">Sobre</a>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            


			
              <!-- Nav tabs -->
              <div style="">
                <div>
                  <ul class="nav nav-tabs justify-content-center" role="tablist" style="padding:0; font-size:0.8em; padding-top:7px; padding-bottom:7px;  " id='submenu'>


					<li class="nav-item" style="max-width:100px; float:left">
                      <a class="nav-link " data-toggle="tab" href="#homea" role="tab" style='padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;'>
                        <i class="fa fas fa-paw"></i> Adoção
                      </a>
                    </li>
                    
                    <li class="nav-item" style="max-width:110px; float:left">
                      <a class="nav-link" data-toggle="tab" href="#messages1" role="tab" style="padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;">
                        <i class="fa fas fa-search"></i> Perdidos
                      </a>
                    </li>
                    <li class="nav-item" style="max-width:100px; float:left	">
                      <a class="nav-link active" data-toggle="tab" href="#settings1" role="tab" style='padding:0; padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;'>
                        <i class="now-ui-icons shopping_shop"></i> Guia
                      </a>
                    </li>

                    
                  </ul>
                </div>
                <div class="card-body" style='padding-left:3px; padding-right:3px; padding-top:5px'>
                  <!-- Tab panes -->
                  <div class="tab-content text-center">
                    <div class="tab-pane " id="home" role="tabpanel">



		
			
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<div style='width:100%; display:block; height:100px; position:absolute; z-index:999;'>
								<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" style='padding-top:100px; padding-bottom:100px; font-size:2em; font-weight:bold; position:relative; float:left;'>
								  <i class="now-ui-icons arrows-1_minimal-left"></i>
								</a>
								<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next" style='padding-top:65px; padding-bottom:105px; font-size:2em; font-weight:bold; position:relative; float:right;'>
								  <i class="now-ui-icons arrows-1_minimal-right"></i>
								</a>
							</div>
							<div class="carousel-inner" role="listbox" style='background:rgba(255,255,255,0.3)'>
								
							  <div class="carousel-item active">
								<img class="d-block" src="assets/img/pets/dog-1.jpg" alt="Dog 2">
								<div class="carousel-caption d-none d-md-block" style=''>
									  <h5 class='tituloPet' style='color:#333'>Dolynho</h5>
									  <p style='color:#111'>I think that’sI think that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="assets/img/pets/dog-2.jpg" alt="Dog 2">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Tinico</h5>
								   <p style='color:#111'>wer  er that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="assets/img/pets/cat-2.jpg" alt="Cat 2">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Fuá</h5>
								   <p style='color:#111'>asdasd vnk that’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							  <div class="carousel-item">
								<img class="d-block" src="assets/img/pets/dog-3.jpg" alt="Dog 3">
								<div class="carousel-caption d-none d-md-block">
								  <h5 class='tituloPet' style='color:#333'>Cuíca</h5>
								   <p style='color:#111'>\x\zxthat’sI think that’s .</p>
										<div style="display:block;">
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="fas fa-times" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
											<a href="#pablo" class="btn btn-neutral btn-facebook btn-icon btn-lg btn-round" style='margin-top:10px'>
											  <i class="far fa-heart" style='font-size:2em; color:#333; margin-top:15px'></i>
											</a>
										</div>
								</div>
							  </div>
							</div>
							
							
						  </div>
            			
	
						
                      
                    </div>
                    
                    <div class="tab-pane" id="messages" role="tabpanel">
                      <p>Em breve...</p>
                    </div>
                    <div class="tab-pane active" id="guia" role="tabpanel">
                      
                      
                      
								  
						
<div id="googleMap" style="width:100%;height:400px;"></div>
                      
                    </div>
                  </div>
                </div>
              </div>
			
			
            
            
            </div>
         
         
          </div>
          
        </div>

                       
              
              
              
              
            </div>
         
                  
         
         
          </div>
        
        </div>
      </div>
          
    
    <!-- Sart Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="now-ui-icons ui-1_simple-remove"></i>
            </button>
            <h4 class="title title-up">Foram encontrados erros:</h4>
          </div>
          <div class="modal-body">
            <p>
				- Email (obrigatório)<br>
				- Senha (obrigatório)<br>
            </p>
          </div>
          <div class="modal-footer">
            
            <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    
    <footer class="footer" data-background-color="black">
      <div class=" container ">
       
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, PetFinder          
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="../assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>  
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
  
  <script>
	  
	 
    
    
  </script>
   
    <script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSA5ImzS0dVHexvhMf6Df2nPEgdbjpvRU&callback=myMap"></script>
</body>

</html>
