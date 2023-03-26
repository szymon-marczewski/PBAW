<?php
require_once dirname(__FILE__).'/../config.php';

$x = $_REQUEST ['x'];
$y = $_REQUEST ['y'];
$procent = $_REQUEST ['pro'];


if ( ! (isset($x) && isset($y))) {
	$messages [] = 'Błędne wywołanie aplikacji. Brak jednego z parametrów.';
}

if ( $x == "") {
	$messages [] = 'Nie podano kwoty';
}
if ( $y == "") {
	$messages [] = 'Nie podano ilości lat';
}

if (empty( $messages )) {
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
        
        if ($x <= 0 || $y <= 0){
                $messages [] = 'Błędne dane';
        }
            
}


if (empty ( $messages )) {
    
    $months = $y * 12;
    
        switch ($procent){
            case 'low':
                $procent = 0.15;
                $monthly = ($x + ($x * $procent)) / $months;
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                break;
                
            case 'medium':
                $procent = 0.18;
                $monthly = ($x + ($x * $procent)) / $months;
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                break;

            case 'high':
                $procent = 0.21;
                $monthly = ($x + ($x * $procent)) / $months;
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                break;
                
       }
}

include 'credit_calc_view.php';
