<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <meta name="description" content="">
          <meta name="keywords" content="">
          <meta name="author" content="">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <link rel="stylesheet" href="css/style.css">
          <link rel="stylesheet" href="css/reset.css">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

        <title>JK Concursos</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
        <!-- Styles -->
        <style>

            html body{
            }
            body section#top {
                background: #09423F;
                height: 200px;
                display: flex;
            }
            body section#top div.flex-center{
                padding: 2% 0 0 20%;

            }
            body section#top div.flex-center div.top-right{

               margin: 0 0 0 10%;
               padding-left: 0%;
               padding-top: 1%;
               display: flex;               

            }
            body section#top div.flex-center div.top-right a{
                text-decoration: none;
                margin: 0 5% 0 50%;
                padding: 0% 5% 0 20%;
            }
            body section#top div{
                
            }
            body section#top div#test ul#banner{
                display: flex;
                padding: 2.5vw 3vw 2vw 3.5vw;
            }
            body section#top div#test ul#banner h1{
                font-size: 3vw;
                font-family: times;
                color: white;
                padding: 0 0 0 16.5vw;
            }
            body section#top ul#lista {
                display: flex;

            }body section#top ul#lista li{

                margin: 0 2vw 0 2vw;
                color: #F1F1F1;
                padding: 5px 5vw 5px 1vw;
                border-radius: 5px;
                background:white;
                box-shadow: 2px 2px #7c7c7c;
            }
            body section#top ul#lista li a{

                padding:0 0 0 55%;
                text-decoration:none;
                color: #7EBBC7;
            }
            body section#top ul#lista li#incio a{
                color: #7EBBC7;
            }
            body section#top ul#lista li a:hover{
                color:#8FAD32;
            }
            body section#main {
                color: white;
                text-align: center;
                background: url(../img/123.jpg);
                background-size: 100% 100%;
                height: 600px;
            }
            body section#main ul li a:hover {
                background-color: green;
            }
            body section#main ul{
                padding: 2vw 0 0 0;
            }
            body section#main ul li{
                padding: 5% 12% 0 12%;

            }
            body section#main ul li h2{
                font-size: 600%;
            }
            body section#main ul li p{
                text-align: justify-all;
            }
            body footer {
                background-color: #09423F;
                height: 20%;
                text-align: center;
                color: white;
            }
            
        </style>
    </head>
    <body>

        <section id="top">

            
            <div id="test">
                
            
            <ul id="banner">
                <li>
                    <img src="../img/logo.png">
                </li>
                <li>
                    <h1>PORTAL DE INGRESSO</h1>
                </li>
            </ul>
            <ul id="lista">
                <li id="inicio">
                    <a href="#">Início</a>
                </li>
                <li>
                    <a href="#">Editais</a>
                </li>
                <li>
                    <a href="#">Sobre</a>
                </li>
                <li>
                    <a href="#">Contato</a>
                </li>
            </ul>
            </div>
            <div class="flex-center">
                <?php if(Route::has('login')): ?>
                    <div class="top-right">
                        <?php if(auth()->guard()->check()): ?>
                            <a href="<?php echo e(url('home')); ?>">Home</a>
                        <?php else: ?>

                            <a href="<?php echo e(route('login')); ?>">Login</a>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>            
            </div>
    </section>
    <section id="main">
        <ul>
            <li>
                <h2>Editais Abertos</h2>
                <p>O Instituto Federal Catarinense (IFC) possui atualmente 15 campi, distribuídos nas cidades de Abelardo Luz, Araquari, Blumenau, Brusque, Camboriú, Concórdia, Fraiburgo, Ibirama, Luzerna, Rio do Sul, Santa Rosa do Sul, São Bento do Sul, São Francisco do Sul, Sombrio e Videira, além de uma Unidade Urbana em Rio do Sul e da Reitoria instalada na cidade de Blumenau.</p>
            </li>
            <li>

                <a href="<?php echo e(url('select-process')); ?>" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Saiba Mais</a>

            </li>
        </ul>
    </section>

        

       

        <footer>
        <p>© 2017 Integrator Project, all rights reserved</p>
        </footer>
    </body>
</html>
