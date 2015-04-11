<div class="modal fade" id="myModalCarro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Detalhe do veículo</h4>
			</div>
			<div class="modal-body">
            	<h1><?=$_array["MODELO"]?></h1>
                <div class="row">
                    <div class="col-lg-8">
                    	<p><img class="img-responsive" src="../carros/<?=$_array['FOTO']?>" alt=""></p>
                        <p><b>Marca:</b>&nbsp;<?=$_array["MARCA"]?><br />
                           <b>Ano Fabricação:</b>&nbsp;<?=$_array["ANO_FABRICACAO"]?>
                           <b>Ano Modelo:</b>&nbsp;<?=$_array["ANO_MODELO"]?><br />
                           <b>Combustível:</b>&nbsp;<?=$_array["COMBUSTIVEL"]?><br />
                           <b>Placa:</b>&nbsp;<?=$_array["PLACA"]?></p>
                    </div>                    	
                    <div class="col-lg-4">
                            <p class="text-capitalize"><b>Opcionais:</b>&nbsp;</p>
                            <ul>
<?php
			while ($_arrayItem = mysql_fetch_assoc($Objects[0]))
			{
				if($_arrayItem["POSSUI"]=="SIM"){
?>	
			                    <li class="text-capitalize"><?=$_arrayItem["DESCRICAO"]?></li>
<?php
				}
			}
?>
							</ul>
                            <p class="text-capitalize"><b>Preços:</b>&nbsp;</p>
                            <ul>
<?php
			while ($_arrayItem = mysql_fetch_assoc($Objects[1]))
			{
				if($_arrayItem["POSSUI"]=="SIM"){
?>	
			                    <li class="text-capitalize"><?=$_arrayItem["DESCRICAO"]?> <b>R$<?=$_arrayItem["VALOR"]?></b></li>
<?php
				}
			}
?>
							</ul>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>
