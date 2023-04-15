{extends file="assets/templates/main.tpl"}
<link rel="stylesheet" href="assets/css/main.css">

{block name=navigation}
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
                        <li class="active"><a href="credit_calc.php">Kalkulator</a></li>
                        <li><a href="about.php">O projekcie</a></li>
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



	<form class="pure-form pure-form-stacked" action="{$app_url}/credit_calc.php" method="post">

        <label for="id_x">Podaj kwotę: </label>
	<input id="id_x" type="text" name="x" value="{$form['x']}" /><br />
        
        <label for="id_y">Podaj ilość lat spłaty: </label>
	<input id="id_y" type="text" name="y" value="{$form['y']}" /><br />
        
	<label for="id_pro">Wybierz oprocentowanie: </label>
	<select name="pro">
		<option value="low">15%</option>
		<option value="medium">18%</option>
                <option value="high">21%</option>
	</select><br />
	<input type="submit" value="Wylicz"/>
	</form>
</div>

{*<div class="l-box-lrg pure-u-1 pure-u-med-3-5">*}

{* wyświeltenie listy błędów, jeśli istnieją *}
{if isset($messages)}
	{if count($messages) > 0} 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		{foreach  $messages as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{* wyświeltenie listy informacji, jeśli istnieją *}
{if isset($infos)}
	{if count($infos) > 0} 
		<h4>Informacje: </h4>
		<ol class="inf">
		{foreach  $infos as $msg}
		{strip}
			<li>{$msg}</li>
		{/strip}
		{/foreach}
		</ol>
	{/if}
{/if}

{if isset($result)}
	<h4>Wynik</h4>
	<p class="res">
	{$result}
	</p>
{/if}

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
{/block}