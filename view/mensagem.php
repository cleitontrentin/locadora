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
			<script type="text/javascript">
                $("#btnOk").click(function(){
					$(".alert").alert('close');
                });	
            </script>
        </p>	
    </div>
