{extends file="main.tpl"}
<link rel="stylesheet" href="/css/main.css">
{block name=navigation}
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
            <div class="container">
                <div class="navbar-header">
                    <!-- Button for smallest screens -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="{$conf->app_url}/ctrl.php"><img src="{$conf->app_url}/images/logo.png" alt="Progressus HTML5 template"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="{$conf->app_url}/ctrl.php">Kalkulator</a></li>
                        <li class="active"><a href="{$conf->app_url}/app/about.php">O projekcie</a></li>
                        <li><a href="{$conf->action_url}logout">Wyloguj</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
{/block}   

{block name=infos}
    <p></p>
{/block}

{block name=content}        
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{$conf->app_url}/ctrl.php">Kalkulator</a></li>
			<li class="active">O projekcie</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">O projekcie</h1>
				</header>
				<h3>O co chodzi?</h3>
				<p><img src="{$conf->app_url}/images/mac.jpg" alt="" class="img-rounded pull-right" width="300" >Dla wszystkich którzy chcą mieć wszystko wyłożone na tacy.</p>
                                <p>Dla tych co chcą przetestować.</p>
                                <p>Dla tych co trafili tu przypadkiem.</p>
                                
                                <h3>Główne założenie</h3>
                                <p>Prosty kalkulator zrobiony na potrzeby zajęć PBAW,  mający na celu korzystać ze starych i coraz nowszych elementów.<br>
                                    Co tydzień zyskuje nowe funkcjonalności i elementy wzbogacające<br></p>
                                
                                <p>Główne zadanie - przygotowanie nas do końcowego projektu z przedmiotu :)</p>
                                
                                <img src="{$conf->app_url}/images/2.jpg">
			</article>
			<!-- /Article -->
			
			<!-- Sidebar -->
			<aside class="col-sm-4 sidebar sidebar-right">

				<div class="widget">
					<h4>Inne kalkulatory</h4>
					<ul class="list-unstyled list-spaces">
                                            <li>Kalkulator BMI<br><span class="small text-muted">Oblicz czy waga jest w normie.</span></li>
                                            <li>Kalkulator spalania paliwa<br><span class="small text-muted">Przygotuj się do podróży i wylicz ile paliwa spali twój samochód</span></li>
					</ul>
				</div>

			</aside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
{/block}	
