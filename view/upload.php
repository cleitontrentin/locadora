<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Locadora - upload</title>

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
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	    <div class="container">
    		<div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				    <span class="sr-only">Toggle navigation</span>
			    	<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
			    </button>
                <a class="navbar-brand" href="admin.php"><i class="fa fa-table fa-fw"></i>&nbsp;Clique aqui para voltar para Área restrita</a>
		    </div>
			<div class="navbar-collapse collapse">
			    <form class="navbar-form navbar-right" role="form" action="../view/uploadProcess.php" method="post" enctype="multipart/form-data">
					<div class="form-group">
					    <input type="file" placeholder="arquivo" class="form-control" id="arquivo" name="arquivo">
				    </div>
					<button type="submit" class="btn btn-success">Enviar</button>
			    </form>
		    </div><!--/.navbar-collapse -->
            
	    </div>
    </div>
    <br>
    <div class="container">
        <div class="row" id="ModalDetalheCarro">
<?php
	$vPasta = '../carros/';
	if(is_dir($vPasta)){
		$vDiretorio = dir($vPasta);
		while($vArquivo = $vDiretorio->read())
		{
			if($vArquivo != '..' && $vArquivo != '.' && $vArquivo != '_notes'){
?>
            <div class="col-lg-3 col-md-6 hero-feature">
                <div class="thumbnail">
                    <img src="<?=$vPasta?><?=$vArquivo?>" alt="">
                    <div class="caption">
                        <p align="center"><?=$vArquivo?></p>
                    </div>
                </div>
            </div>
<?php
			}
		}
		$vDiretorio->close();
	}else{
		echo 'A pasta não existe.';
	}
?>        

        </div>
    </div>

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

</body>

</html>
