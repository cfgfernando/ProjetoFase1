<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curso PHP::Contato</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/half-slider.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- MENU -->
    <?php require_once("menu.php"); ?>
    <!--FIM MENU-->

    <!-- inicio do TOPO-->
    <?php require_once("topo.php"); ?>
    <!-- FIM DO TOPO -->


    </header>

    <!-- Conteudo do Site -->
    <div class="container">
        <h1>Contato</h1>
        <div class="row">
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="nome">Nome:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nome" placeholder="Digite o Nome">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="assunto">Assunto:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="assunto" placeholder="Digite o assunto">
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="mensagem">Mensagem:</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Enviar</button>
                    </div>
                </div>
            </form>

        </div>




        <hr>


        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <?php echo date('Y'); ?> PHP Fundation</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>
        </div>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/umd/modal.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
