    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-clientes">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Fone Residencial</th>
                    <th>Fone Celular</th>
                    <th width="160px">Acao</th>
                </tr>
            </thead>
            <tbody>
<?php
			while ($_array = mysql_fetch_assoc($result))
			{
?>	
                <tr class="odd gradeX">
                    <td><?=$_array['IDCLIENTE']?></td>
                    <td><?=$_array['NOME']?></td>
                    <td><?=$_array['FONE_RESIDENCIAL']?></td>
                    <td><?=$_array['FONE_CELULAR']?></td>
                    <td>
                    	<a href="#" class="btnAlterar" id="<?=$_array['IDCLIENTE']?>">
                        	<i class="fa fa-edit fa-fw"></i>Detalhe
                        </a>
                        &nbsp;
                        <a href="#" class="btnExcluir" id="<?=$_array['IDCLIENTE']?>">
                        	<i class="fa fa-trash-o fa-fw"></i>Excluir
                        </a>
                    </td>
			    </tr>
<?php
			}
?>
		    </tbody>
    	</table>
    
    </div>
    <!-- /.panel-body -->

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->

    <script>

		$(document).ready(function() {
			$('#dataTables-veiculos').dataTable();

		});

		$(".btnAlterar").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'cliente'
					, txtAcao: 'detalhe'
					//variaveis para o objeto
					, txtIdCliente: this.id
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});

		$(".btnExcluir").click(function(){
			if(confirm('Deseja realmente excluir o registro?')){
				$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
						//variaveis de controle
						txtFormulario: 'cliente'
						, txtAcao: 'excluir'
						//variaveis para o objeto
						, txtIdCliente: this.id
					}, function(responseTxt,statusTxt,xhr){
					if(statusTxt=="error")
						alert("Error: "+xhr.status+": "+xhr.statusText);
				});
			}
		});

    </script>
