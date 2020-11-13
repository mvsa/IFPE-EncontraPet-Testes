
  

function EnviarForm2(){
    var err = '';

    var quantidadeErros = 0;

    var mensagem = '';

    var tipoMensagem = 'cadastrado';
    var tipoMensagem2 = 'cadastrar';
    var dialog;
    
    if ($('#nome2').val() == ''){
        quantidadeErros++;
        mensagem += '- Nome (obrigatório)<br />'
    }


    if ($('#email2').val() == ''){
        quantidadeErros++;
        mensagem += '- Email (obrigatório)<br />'
    }
    if ($('#senha2').val() == ''){
        quantidadeErros++;
        mensagem += '- Senha (obrigatório)<br />'
    }
    if ($('#confirma_senha2').val() == ''){
        quantidadeErros++;
        mensagem += '- Confirmação de senha (obrigatório)<br />'
        
    } else {
        if ($('#confirma_senha2').val() != $('#senha2').val()){
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
     


        $.post('process.php',$('#formSecundario').serialize(),
        
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




function EnviarForm3(){
    var err = '';

    var quantidadeErros = 0;

    var mensagem = '';

    var tipoMensagem = 'cadastrado';
    var tipoMensagem2 = 'cadastrar';
    var dialog;
    
    if ($('#nome3').val() == ''){
        quantidadeErros++;
        mensagem += '- Nome (obrigatório)<br />'
    }
    if ($('#email3').val() == ''){
        quantidadeErros++;
        mensagem += '- Email (obrigatório)<br />'
    }
    if ($('#senha3').val() == ''){
        quantidadeErros++;
        mensagem += '- Senha (obrigatório)<br />'
    }
    if ($('#confirma_senha3').val() == ''){
        quantidadeErros++;
        mensagem += '- Confirmação de senha (obrigatório)<br />'
        
    } else {
        if ($('#confirma_senha3').val() != $('#senha3').val()){
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
     


        $.post('process.php',$('#formTerciario').serialize(),
        
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
    
    $("#telefone1").mask("(99) 99999999?9"); 
    $("#telefone2").mask("(99) 99999999?9"); 
    $("#telefone3").mask("(99) 99999999?9"); 
        
    
    
});	 
	