<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Curso PHP::Produtos</title>

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
            <h1>Produtos</h1>
            <div class="row">
                <div class="col-md-4">
                    <img class="img-circle" src="http://placehold.it/140x140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="col-md-4">
                    <img class="img-circle" src="http://placehold.it/140x140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->
                <div class="col-md-4">
                    <img class="img-circle" src="http://placehold.it/140x140">
                    <h2>Heading</h2>
                    <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
                    <p><a class="btn" href="#">View details &raquo;</a></p>
                </div><!-- /.span4 -->

            </div>

            <hr>
    <!--Fim do Conteudo do Site -->

        <!-- Footer -->
        <div class="navbar navbar-fixed-bottom">
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

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
