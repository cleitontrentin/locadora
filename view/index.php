<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="content-language" content="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Description" content="Locadora de Veículos">
    <meta name="author" content="Curso Tecnico em informatica para internet">

    <title>Locadora de Veículos</title>

    <!-- Bootstrap core CSS -->
    <link href="../include/css/bootstrap.css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

	<div class="container">
    	<nav class="navbar navbar-inverse" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Locadora</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/locadora/view/admin.php">Área Restrita</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
	    </nav>
    </div>
    <!-- /.container -->

    <div class="container">

        <div class="jumbotron hero-spacer">
            <h1>Bem vindo a Locadora de veículos!</h1>
            <p>Alugar um carro é mais fácil e barato do que você imagina!</p>
        </div>

        <hr>

        <div class="row">
            <div class="col-lg-12">
                <h3>Lista de Veiculos</h3>
            </div>
        </div>
        <!-- /.row -->

        <div class="row text-center" id="listaCarro">

        </div>
        <!-- /.row -->

        <div class="row" id="ModalDetalheCarro">

        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    <script src="../include/js/jquery-1.10.2.js"></script>
    <script src="../include/js/bootstrap.js"></script>
    <script>
		$(document).ready(function(){
			$("#listaCarro").load("../controller/ctrlReceiveForm.php" ,{
					//variaveis de controle
					txtFormulario: "veiculo"
					, txtAcao: "siteListaVeiculo"
				}, function(responseTxt,statusTxt,xhr){
				if(statusTxt=="error")
					alert("Error: "+xhr.status+": "+xhr.statusText);
			});
		});	
    
    </script>
    
    
    
    
</body>
</html>
