{extends file = "main.tpl"}
<link rel="stylesheet" href="{$conf->app_url}/css/main.css">
{block name=navigation}
<body class="home">
        <!-- Fixed navbar -->
        <div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{$conf->app_url}/ctrl.php"><img src="{$conf->app_url}/images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a href="{$conf->app_url}/ctrl.php">Kalkulator</a></li>
                        <li><a href="{$conf->app_url}/app/about.php">O projekcie</a></li>
                        <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
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
{/block}

{block name=infos}
    <br> <br>
    <h2 class="thin">Kalkulator kredytowy - Oblicz miesięczną ratę na podstawie podanych danych</h2>
    </p>

{/block}
{block name=content}

<h2>Kalkulator kredytowy</h2>



	<form class="pure-form pure-form-stacked" action="{$conf->action_root}credit" method="post">
        <fieldset>
        <label for="x">Podaj kwotę: </label>
	<input id="x" type="text" name="x" value="{$form->x}"/><br />
        
        <label for="y">Podaj ilość lat spłaty: </label>
	<input id="y" type="text" name="y" value="{$form->y}" /><br />
        
	<label for="pro">Wybierz oprocentowanie: </label>
	<select name="pro">
		<option value="low">15%</option>
		<option value="medium">18%</option>
                <option value="high">21%</option>
	</select><br />
	<input type="submit" value="Wylicz"/>
        </fieldset>
	</form>

{include file='messages.tpl'}
{if isset($res->result)}
	<h4>Wynik</h4>
	<p class="res">
	{$res->result}
	</p>
{/if}

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
{/block}