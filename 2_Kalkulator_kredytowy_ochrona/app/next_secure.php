<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>STRONA CHRONIONA</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto; ">
    <a href="<?php print(_APP_ROOT); ?>/app/credit_calc.php" class="pure-button"><b>POWRÓT</b></a>
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active"><b>WYLOGUJ</b></a>
</div>

<div style="width:90%; margin: 2em auto; background-color: #ffa500; text-align: center">
    <p><i>Chroniona strona z dostępem tylko dla upoważnionych</i></p>
</div>	

</body>
</html>
