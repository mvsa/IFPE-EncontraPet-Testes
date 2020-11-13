<?php 
/**
*	@Desenvolvido por Afixo Agência WEB
*	@url www.afixo.com.br
*	@email gestor@afixo.com.br
*
*	@autor Flávio Silva Brandão <flavio@afixo.com.br>
*	@version 10-02-2020 as 09:53:53
*/


# 
# REQUIRES OBRIGATORIOS
#

//require('../inc/session.php');
require('../classes/gestor.php');

#
# INSTANCIA DE OBJETOS OBRIGATORIAS
#


$util = new Util();
$gestor   = new Gestor();    

#
# TRATAMENTO DE INJECTION
#
extract($_GET);
$objetoMunicipios = $gestor->retornarMunicipios($uf,'uf','municipios','nome','ASC');

if ($objetoMunicipios){
	if (count($objetoMunicipios) < 2){
		$objetoMunicipios = array($objetoMunicipios);
	}
}
?>

<select  class="form-control" name='municipio' id='municipio' style='display:block; 'onchange='mudaBairro()'>
<option value=''>Selecione uma cidade</option>
<?php 
if($objetoMunicipios){
	foreach($objetoMunicipios as $obj) {  
		
		
		?>							
		<option value='<?= urlencode($obj->nome)?>'><?=$obj->nome?></option>

	<?php 
	}
} 
	
?>							
</select>

