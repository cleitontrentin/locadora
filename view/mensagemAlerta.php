    <br>
<?php
	if($tipo == "OK"){
		$tipo = "alert-success";
	}elseif($tipo == "INFO"){
		$tipo = "alert-info";
	}elseif($tipo == "ERRO"){
		$tipo = "alert-danger";
	}else{
		$tipo = "alert-warning";
	}
?>    <div class="alert <?=$tipo?> fade in" role="alert">
        <h4 align="center"><?=$titulo?></h4>
        <hr>
        <p><?=$texto?></p>
        <p align="center">
			<button type="button" class="btn btn-default" id="btnOk">Ok</button>
        </p>	
    </div>
        
	<script type="text/javascript">
		$(document).ready(function(){	
			window.scrollTo(0,0);
		});
	
        $("#btnOk").click(function(){
			$(".alert").alert('close');
<?php
if (!(($formulario == "atual") and ($acao == "manter"))){
?>
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: '<?=$formulario?>'
					, txtAcao: '<?=$acao?>'
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
<?php
}
?>
			
        });	
    </script>
