<?php
			while ($_array = mysql_fetch_assoc($result))
			{
?>	

            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="../carros/<?=$_array['FOTO']?>" alt="">
                    <div class="caption">
                        <h3><?=$_array['MODELO']?></h3>
                        <p>Marca: <?=$_array['MARCA']?></p>
                        <p>Ano Fabricação: <?=$_array['ANO_FABRICACAO']?></p>
                        <p>Ano Modelo: <?=$_array['ANO_MODELO']?></p>
                        <p>Combustivel: <?=$_array['COMBUSTIVEL']?></p>
                        <p><button class="btnDetalheCarro" id="<?=$_array['IDVEICULO']?>">Saiba mais!</button></p>
                    </div>
                </div>
            </div>
<?php
			}
?>
<script language="javascript" type="text/javascript">

		$(".btnDetalheCarro").click(function(){
			$("#ModalDetalheCarro").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "veiculo"
					, txtAcao: "siteDetalheVeiculo"
					//variaveis para o objeto
					, txtIdVeiculo: this.id
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error"){
					alert("Error: "+xhr.status+": "+xhr.statusText);
				}else{
					$('#myModalCarro').modal('show');
				}
			});
		});	

</script>