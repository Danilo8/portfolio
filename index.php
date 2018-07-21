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
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

        <!--CSS file-->
        <link rel="stylesheet" href="css/style.min.css">

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
        .cover-container{background:url(img/background/cover.jpg) no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}
    </style>
    <body style="font-family: 'Arimo', sans-serif;">
        <!--Cover Container-->
        <div class="cover-container d-flex w-100 mx-0 flex-column">
            <!--Header-->
            <header style="" class=" pt-1 pb-1 px-5 bg-dark">
                <div class="inner">
                    <!--Logo-->
                    <h2 style="cursor: pointer;color: #b5bab7" onclick="window.location = 'index.php'" class="masthead-brand">
                        <img src="img/logo/logo_branca.png" alt="Logo">
                    </h2><!--/Logo-->
                    <nav class="nav nav-masthead justify-content-center pt-3 pr-5 mr-5">
                        <a class="nav-link active" href="index.php">Home</a>
                        <a class="nav-link" href="#">Sobre</a>
                        <a class="nav-link" href="#">Serviços</a>
                        <a class="nav-link" href="#">Portfólio</a>
                        <a class="nav-link" href="#">Contato</a>
                        <a class="nav-link" href="#">Blog</a>
                    </nav>
                </div>
            </header><!--/Header-->
             <!--Main-->
            <main style="margin-bottom: 8%;margin-top: 10%;" role="main" class="cover mx-auto">
                <div class="text-center" style="font-family: 'Russo One', sans-serif;color: white;">
                    <h1 class="mb-0" style="font-size: 60px;">Danilo Gonçalves</h1>
                    <p style="font-size: 30px;">Desenvolvedor Web</p>
                    <p style="font-family: 'Arimo', sans-serif;">A melhor escolha para desenvolver um site</p>
                </div>
            </main><!--/Main-->
        </div><!--/Cover Container-->
    </body>
</html>