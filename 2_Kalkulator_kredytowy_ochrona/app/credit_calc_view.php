<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8" />
	<title>Kalkulator</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
</head>
<body>

<div style="width:90%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/next_secure.php" class="pure-button"><b>NASTĘPNA STRONA</b></a>
        <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active"><b>WYLOGUJ</b></a>
</div>

<div style="width:90%; margin: 2em auto;">

<form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post" class="pure-form pure-form-stacked">
    <legend><b>Kalkulator kredytowy - Oblicz miesięczną ratę na podstawie wpisanych danych</b></legend>
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
	if (count ( $messages ) > 0) {
		echo '<ol style="margin-top: 1em; padding: 1em 1em 1em 2em; border-radius: 0.5em; background-color: #f88; width:25em">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin-top: 1em; padding: 1em; border-radius: 0.5em; background-color: #7fffd4; width:25em; text-align: center">
<?php echo $result; ?>
</div>
<?php } ?>

</div>

</body>
</html>
