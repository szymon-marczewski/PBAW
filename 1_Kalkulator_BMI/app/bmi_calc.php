<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$operation = $_REQUEST ['op'];


if ( ! (isset($x) && isset($y))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano wzrostu';
}
if ( $y == "") {
	$messages [] = 'Nie podano wagi';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	

}


if (empty ( $messages )) {
    
    $bmi = $y / ($x *$x);
        switch ($operation){
            case 'man':
                if($bmi < 18.5) {$result = "Pańskie BMI: ".round($bmi,2)." - niedowaga";}
                if($bmi >= 18.5 && $bmi < 25) {$result = "Pańskie BMI: ".round($bmi,2)." - waga prawidłowa";}
                if($bmi >= 25 && $bmi < 30) {$result = "Pańskie BMI: ".round($bmi,2)." - nadwaga";}
                if($bmi >= 30) {$result = "Pańskie BMI: ".round($bmi,2)." - otyłość";}
                break;
            
            case 'woman':
                if($bmi < 18.5) {$result = "Pani BMI: ".round($bmi,2)." - niedowaga";}
                if($bmi >= 18.5 && $bmi < 25) {$result = "Pani BMI: ".round($bmi,2)." - waga prawidłowa";}
                if($bmi >= 25 && $bmi < 30) {$result = "Pani BMI: ".round($bmi,2)." - nadwaga";}
                if($bmi >= 30) {$result = "Pani BMI: ".round($bmi,2)." - otyłość";}
                break;
        }
}

include 'bmi_calc_view.php';
