<?php
	/*verificando a sessão*/
	include_once("../controller/ctrlSessao.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locadora - Área restrita</title>

    <!-- Core CSS - Include with every page -->
    <link href="../include/css/bootstrap.min.css" rel="stylesheet">
    <link href="../include/font-awesome/css/font-awesome.css" rel="stylesheet">
    <!-- Page-Level Plugin CSS - Tables -->
    <link href="../include/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">    
    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="../include/css/plugins/timeline/timeline.css" rel="stylesheet">
    <!-- SB Admin CSS - Include with every page -->
    <link href="../include/css/sb-admin.css" rel="stylesheet">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Área restrita</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" id="detalheUsuario"><i class="fa fa-user fa-fw"></i> <?=$sLogin?> </a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../view/logoff.php"><i class="fa fa-sign-out fa-fw"></i> Sair </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.php"><i class="fa fa-globe  fa-fw"></i> Site</a>
                        </li>
                        <li>
                            <a href="admin.php"><i class="fa fa-table fa-fw"></i> Principal</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Operação <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="linkForm" id="localcao" href="#">Locação</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Cadastros Principais<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="linkForm" id="cliente" href="#">Cliente</a></li>
                                <li><a class="linkForm" id="funcionario" href="#">Funcionário</a></li>
                                <li><a class="linkForm" id="veiculo" href="#">Veículo</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Cadastros Secundários<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="linkForm" id="opcional" href="#">Opcionais</a></li>
                                <li><a class="linkForm" id="tabela" href="#">Preços</a></li>
                                <li><a href="../view/upload.php">Upload de imagens</a></li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
        	<div id="alertForm">
            </div>
        	<div id="conteudoForm">
            </div>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="../include/js/jquery-1.10.2.js"></script>
    <script src="../include/js/bootstrap.min.js"></script>
    <script src="../include/js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Page-Level Plugin Scripts - Dashboard -->
    <script src="../include/js/plugins/morris/raphael-2.1.0.min.js"></script>
	
    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="../include/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="../include/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    
    <!-- SB Admin Scripts - Include with every page -->
    <script src="../include/js/sb-admin.js"></script>

    <!-- Scripts de funcionario da pagina -->
	<script type="text/javascript">
		$(".linkForm").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: this.id
					, txtAcao: 'principal'
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	

		$("#detalheUsuario").click(function(){
			$("#conteudoForm").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: 'funcionario'
					, txtAcao: 'detalhe'
					//variaveis para o objeto
					, txtIdFuncionario: '<? //$sIdFuncionario ?>'
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
		
    </script>


</body>

</html>
