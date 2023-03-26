<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" />
<title>Kalkulator kredytowy</title>
</head>
<body>

<form action="<?php print(_APP_URL);?>/app/credit_calc.php" method="post">
    
        <label for="id_x">Podaj kwotę: </label>
	<input id="id_x" type="text" name="x" value="<?php if (isset($x)) print($x); ?>" /><br />
        
        <label for="id_y">Podaj ilość lat spłaty: </label>
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br />
        
	<label for="id_pro">Wybierz oprocentowanie: </label>
	<select name="pro">
		<option value="low">15%</option>
		<option value="medium">18%</option>
                <option value="high">21%</option>
	</select><br />
	<input type="submit" value="Wylicz" />
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div style="margin: 20px; padding: 10px; border-radius: 5px; background-color: #ff0; width:300px;">
<?php echo $result; ?>
</div>
<?php } ?>

</body>
</html>
