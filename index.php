<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Danilo Gonçalves - Desenvolvedor Web">
        <meta name="author" content="Danilo Gonçalves dos Santos">
        <title>Danilo Gonçalves - Desenvolvedor Web</title>

        <!--cdn Bootstrap CSS file-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

        <!--cdn Bootstrap JS files-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

        <!--CSS file-->
        <link rel="stylesheet" href="css/style.min.css">
        <link rel="stylesheet" href="css/button.css">

        <!--JS file-->
        <script src="js/scroll.js"></script>

        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Arimo" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

        <!--Icon-->
        <link rel="icon" href="img/icon/DG.ico" />
    </head>
    <style>
        /*
        * Código CSS para estilização da página
        * Definindo um Background para a tela
        */
        .cover-container{background:url(img/background/cover2.jpg) no-repeat center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body style="font-family: 'Arimo', sans-serif;" data-spy="scroll" data-target="#menu" data-offset="0">
        <!--Cover Container-->
        <div id="home" class="cover-container d-flex w-100 h-100 mx-0 flex-column">
            <!--Header-->
            <header id="header" style="" class="pt-1 pb-1 px-5 fixed-top">
                <div class="inner">
                    <!--Logo-->
                    <h2 style="cursor: pointer;" class="masthead-brand">
                        <img src="img/logo/logo_branca.png" alt="Logo">
                    </h2><!--/Logo-->
                    <nav id="menu" class="nav nav-masthead justify-content-center pt-3 pr-5 mr-5">
                        <a class="scroll nav-link active" href="#home">Home</a>
                        <a class="scroll nav-link" href="#servicos">Serviços</a>
                        <a class="scroll nav-link" href="#sobre">Sobre</a>
                        <a class="scroll nav-link" href="#portfolio">Portfólio</a>
                        <a class="scroll nav-link" href="#contato">Contato</a>
                        <a class="scroll nav-link" href="#">Blog</a>
                    </nav>
                </div>
            </header><!--/Header-->
            <!--Carousel-->
            <div id="carousel" class="carousel slide mb-1" data-ride="carousel">
                <!--Main-->
                <main style="margin-top: 18%;margin-bottom: 15%" role="main" class="cover mx-auto">
                    <div id="carousel" class="carousel slide" data-ride="carousel">
                        <ol style="top: 150%" class="carousel-indicators">
                            <li data-target="#carousel" data-slide-to="0" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-center" style="font-family: 'Russo One', sans-serif;color:;">
                                    <h1 class="mb-0" style="font-size: 60px;">Danilo Gonçalves</h1>
                                    <p style="font-size: 30px;">Desenvolvedor Web</p>
                                    <p class="text-body" style="font-family: 'Arimo', sans-serif;font-size: 18px;">
                                        Criação de sites e sistemas web
                                    </p>
                                    <button id="button" class="mb-1" style="font-family: 'Arimo', sans-serif;">
                                        CONSULTE-NOS
                                    </button>
                                </div>
                            </div>
                            
                        </div>
                        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </main><!--/Main-->
            </div><!--/Carousel-->
            <nav style="position: absolute;top: 100%;" class="nav nav-masthead justify-content-center navbar-dark bg-dark w-100">
                <span style="font-size: 25px;color: #fff;" class="navbar-text p-3">
                    Está precisando de um site?
                </span>
                <button style="font-size: 14px;color: #fff;border: none;margin: 0" class="px-5 bg-danger" id="button">
                    CONSULTE-NOS
                </button>
            </nav>
            <!--Serviços-->
            <div style="margin-bottom: 800px;padding-top: 100px" id="servicos" class="container-fluid">
                <div class="container">
                    <h1 class="text-center">Serviços</h1>
                </div>
            </div><!--/Serviços-->
            <!--Sobre-->
            <div id="sobre">
                
            </div><!--/Sobre-->
            <!--Portfólio-->
            <div id="portfolio">
                
            </div><!--/Portfólio-->
            <!--Contato-->
            <div id="contato">
                
            </div><!--/Contato-->
        </div><!--/Cover Container-->
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/header-animate.min.js"></script>
        <script>
            $('body').scrollspy({ target: '#menu' });
        </script>
    </body>
</html>