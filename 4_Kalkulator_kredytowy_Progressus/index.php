<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>Wylicz ratę kredytu</title>

        <link rel="shortcut icon" href="assets/images/gt_favicon.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="assets/css/main.css">

    </head>

    <body class="home">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="#">Kalkulator</a></li>
                        <li><a href="about.html">O projekcie</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div> 
        <!-- /.navbar -->

        <!-- Header -->
        <header id="head">
            <div class="container">
                <div class="row">
                    <h1 class="lead">PROSTY, DARMOWY I SKUTECZNY</h1>
                    <p class="tagline"><b>Przekonaj się sam</b></p>
                </div>
            </div>
        </header>
        <!-- /Header -->

        <!-- Intro -->
        <div class="container text-center">
            <br> <br>
            <h2 class="thin">Kalkulator kredytowy - Oblicz miesięczną ratę na podstawie podanych danych</h2>
            </p>
        </div>
        <!-- /Intro-->

        <!-- Highlights - jumbotron -->
        <div class="jumbotron top-space">
            <div class="container">

                <div style="width:90%; margin: 2em auto;">

                    <form action="credit_calc.php" method="post" class="pure-form pure-form-stacked">
                        <fieldset>
                            <label for="id_x">Podaj kwotę kredytu: </label>
                            <input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />

                            <label for="id_y">Podaj ilość lat spłaty: </label>
                            <input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />

                            <label for="id_pro">Wybierz oprocentowanie: </label>
                            <select name="pro">
                                <option value="low">15%</option>
                                <option value="medium">18%</option>
                                <option value="high">21%</option>
                            </select>
                        </fieldset>
                        <input type="submit" value="Wylicz" class="pure-button pure-button-primary"/>
                    </form>	

                    <?php
                    if (isset($messages)) {
                        if (count($messages) > 0) {
                            echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em">';
                            foreach ($messages as $key => $msg) {
                                echo '<li>' . $msg . '</li>';
                            }
                            echo '</ol>';
                        }
                    }
                    ?>

                    <?php if (isset($result)) { ?>
                        <div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #7fffd4; width:25em; text-align: center">
                            <?php echo $result; ?>
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>
        
        <div class="container">

            <h2 class="text-center top-space">SPOSÓB KORZYSTANIA</h2>
            <br>

            <div class="row">
                <div class="col-sm-6">
                    <h3>1. Wypełnij puste okienka</h3>
                    <p>Wpisz kwotę na jaką chcesz wziąć kredyt oraz podaj liczbę lat które będziesz spłacał. Kalkulator sam przetworzy lata na miesiące.</p>
                </div>
                <div class="col-sm-6">
                    <h3>2. Wybierz oprocentowanie kredytu i naciśnij "wylicz"</h3>
                    <p> Otrzymasz dokładne wyliczenia wielkości miesięcznej raty!
                        <b><br>TAK! To takie proste! Sprawdź już teraz!</b>
                        </p>
                </div>
            </div> 

        </div>	

        <footer id="footer" class="top-space">

            <div class="footer1">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Kontakt</h3>
                            <div class="widget-body">
                                <p>+48 22 444 4444<br>
                                    <a href="mailto:#">default.email@something.com</a><br>
                                    <br>
                                    Uniwersytet Śląski, Sosnowiec
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-3 widget">
                            <h3 class="widget-title">Obserwuj</h3>
                            <div class="widget-body">
                                <p class="follow-me-icons">
                                    <a href=""><i class="fa fa-twitter fa-2"></i></a>
                                    <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                                    <a href=""><i class="fa fa-github fa-2"></i></a>
                                    <a href=""><i class="fa fa-facebook fa-2"></i></a>
                                </p>	
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <h3 class="widget-title">Projekt</h3>
                            <div class="widget-body">
                                <p>Czwarte zadanie z PBAW. Będzie w przyszłości krok po kroku rozwijane z nowymi funkcjami, elementami i możliwościami</p>
                                <p>Testowy tekst na zapełnianie miejsca</p>
                            </div>
                        </div>

                    </div> <!-- /row of widgets -->
                </div>
            </div>

            <div class="footer2">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="simplenav">
                                    <a href="#">Kalkulator</a> | 
                                    <a href="about.html">O projekcie</a> 
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 widget">
                            <div class="widget-body">
                                <p class="text-right">
                                    Copyright &copy; 2023
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </footer>	

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="assets/js/headroom.min.js"></script>
        <script src="assets/js/jQuery.headroom.min.js"></script>
        <script src="assets/js/template.js"></script>
    </body>
</html>
