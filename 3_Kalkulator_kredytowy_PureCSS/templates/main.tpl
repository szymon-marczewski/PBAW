<!doctype html>
<html lang="pl">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="{$page_description|default:"Opis domyślny"}">
    <title>{$page_title|default:"Tytuł domyślny"}</title>
    
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
        <link rel="stylesheet" href="{$app_url}/css/main-grid.css">

        <link rel="stylesheet" href="{$app_url}/css/layouts/marketing.css">
        <link rel="stylesheet" href="{$app_url}/css/style.css">
{if $hide_intro }
    <link rel="stylesheet" href="{$app_url}/css/style_hide_intro.css">
{/if}
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">



</head>
<body>

<div id="app_top" class="header">
    <div class="home-menu pure-menu pure-menu-open pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">{$page_title|default:"Tytuł domyślny"}</a>
        <ul>
            <li><a href="#app_content">Kalkulator</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">{$page_title|default:"Tytuł domyślny"}</h1>
        <p class="splash-subhead">
             {$page_description|default:"Opis domyślny"}
        </p>
        <p>
            <a href="#app_content" class="pure-button pure-button-primary">Wylicz ratę kredytu</a>
        </p>
    </div>
</div>

<div class="content-wrapper">

    <div id="app_content" class="content">

{block name=content} Domyślna treść zawartości .... {/block}

    </div>

    <div class="footer l-box is-center">
		<p>
{block name=footer} Domyślna treść stopki .... {/block}
		</p>
        <p>Widok oparty na stylach i szablonie <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>.</p>
    </div>

</div>


</body>
</html>
