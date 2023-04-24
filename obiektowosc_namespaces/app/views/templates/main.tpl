<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport"    content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

        <title>{$page_title|default:"Tytuł domyślny"}</title>
        <link rel="shortcut icon" href="{$conf->app_url}/images/gt_favicon.png">

        <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
        <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap.min.css">
        <link rel="stylesheet" href="{$conf->app_url}/css/font-awesome.min.css">

        <!-- Custom styles for our template -->
        <link rel="stylesheet" href="{$conf->app_url}/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="{$conf->app_url}/css/main.css">

    </head>
    
<body>
{block name=navigation} ... {/block}

        
        <div class="container text-center">
            {block name = infos} ...  {/block}
        </div>
        

        <!-- Highlights - jumbotron -->
        <div class="jumbotron top-space">
            <div class="container">
                
            {block name = content} ... {/block}
            
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
                                    <a href="{$conf->app_url}/ctrl.php">Kalkulator</a> | 
                                    <a href="{$conf->app_url}/app/about.php">O projekcie</a> 
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
        <script src="{$conf->app_url}/js/headroom.min.js"></script>
        <script src="{$conf->app_url}/js/jQuery.headroom.min.js"></script>
        <script src="{$conf->app_url}/js/template.js"></script>
    </body>
</html>