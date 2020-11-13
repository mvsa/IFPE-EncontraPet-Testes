<?php 
header("Expires: on, 01 Jan 1970 00:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
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

/*
 * refatorar o metodo 
 * 
 * */
 
 
//var_dump($_REQUEST);

$objetoBairros = $gestor->retornarBairrosLike(urlencode($municipio), $uf);

?>
<script>
	var arrayBairros = "";
</script>
<?php
if ($objetoBairros){
	if (count($objetoBairros) < 2){
		$objetoBairros = array($objetoBairros);
	}
	foreach($objetoBairros as $obj) {  
		
			
		$explosao = explode(" - ", $obj->nome);	
		
		
		
		if ($municipio == $explosao[1]){
			$arrayBairros .= "'" . $explosao[0] . "', "; 
		}
		
	}
	//var_dump($arrayBairros);
	$arrayBairros = substr($arrayBairros,0, strlen($arrayBairros)-2);
	
	//var_dump($objetoBairros);
	?>
	<script>
	arrayBairros = [ <?= $arrayBairros ?> ];
	</script>
	<?php
	
	
} else {
	?>
	<script>
	arrayBairros = "";
	</script>
	<?php	
	
}
?>

<div class="autocomplete" style="width:100%">
	<input  class="form-control" name='bairro' id='bairro' placeholder="Informe um bairro">
						
</select>
</div>
<script>
autocomplete(document.getElementById("bairro"), arrayBairros);
</script>

