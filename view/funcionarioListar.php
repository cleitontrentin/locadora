    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover" id="dataTables-funcionarios">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Login</th>
                    <th width="160px">Acao</th>
                </tr>
            </thead>
            <tbody>
<?php
			while ($_array = mysql_fetch_assoc($result))
			{
?>	
                <tr class="odd gradeX">
                    <td><?=$_array['IDFUNCIONARIO']?></td>
                    <td><?=$_array['NOME']?></td>
                    <td><?=$_array['LOGIN']?></td>
                    <td>
                    	<a href="#" class="btnAlterar" id="<?=$_array['IDFUNCIONARIO']?>">
                        	<i class="fa fa-edit fa-fw"></i>Detalhe
                        </a>
                        &nbsp;
                        <a href="#" class="btnExcluir" id="<?=$_array['IDFUNCIONARIO']?>">
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
			$('#dataTables-funcionarios').dataTable();
		});

		$(".btnAlterar").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'funcionario'
					, txtAcao: 'detalhe'
					//variaveis para o objeto
					, txtIdFuncionario: this.id
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});

		$(".btnExcluir").click(function(){
			if(confirm('Deseja realmente excluir o registro?')){
				$("#alertForm").load("../controller/ctrlReceiveForm.php" ,{
						//variaveis de controle
						txtFormulario: 'funcionario'
						, txtAcao: 'excluir'
						//variaveis para o objeto
						, txtIdFuncionario: this.id
					}, function(responseTxt,statusTxt,xhr){
					if(statusTxt=="error")
						alert("Error: "+xhr.status+": "+xhr.statusText);
				});
			}
		});

    </script>
