<?php
require_once dirname(__FILE__).'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

function getParameters(&$x, &$y, &$procent)
{
    $x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
    $y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;	
    $procent = isset($_REQUEST['pro']) ? $_REQUEST['pro'] : null;
}

function validate(&$x,&$y,&$procent,&$messages){
    
        if ( ! (isset($x) && isset($y) && isset($procent))) {
                return false;
        }

        if ( $x == "") {
                $messages [] = 'Nie podano kwoty';
        }

        if ( $y == "") {
                $messages [] = 'Nie podano ilości lat';
        }

        if (count( $messages ) != 0 )  {
                return false;
        }
	
	if (! is_numeric( $x )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą całkowitą';
	}
	
	if (! is_numeric( $y )) {
		$messages [] = 'Druga wartość nie jest liczbą całkowitą';
	}	
        
        if ($x <= 0 || $y <= 0){
                $messages [] = 'Błędne dane';
        }
        
        if (count ( $messages ) != 0) {
                return false;
        }
        else {
                return true;
        }
}

function count_credit(&$x,&$y,&$procent,&$messages,&$result){
    
    global $role;
    
    $months = $y * 12;
    
        switch ($procent){
            case 'low':
                $procent = 0.15;
                $monthly = ($x + ($x * $procent)) / $months;
                if($x >= 100000){
                    if($role == 'admin'){
                        $result = "Miesięczna rata: ".round($monthly,2)."zł";
                        break;
                    }
                    else{
                        $messages [] = 'Tylko administrator może wyliczać tak duże kredyty!';
                        break;
                    }
                }
                else{
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                }
                break;
                
            case 'medium':
                $procent = 0.18;
                $monthly = ($x + ($x * $procent)) / $months;
                if($x >= 100000){
                    if($role == 'admin'){
                        $result = "Miesięczna rata: ".round($monthly,2)."zł";
                        break;
                    }
                    else{
                        $messages [] = 'Tylko administrator może wyliczać tak duże kredyty!';
                        break;
                    }
                }
                else{
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                }
                break;

            case 'high':
                $procent = 0.21;
                $monthly = ($x + ($x * $procent)) / $months;
                if($x >= 100000){
                    if($role == 'admin'){
                        $result = "Miesięczna rata: ".round($monthly,2)."zł";
                        break;
                    }
                    else{
                        $messages [] = 'Tylko administrator może wyliczać tak duże kredyty!';
                        break;
                    }
                }
                else{
                $result = "Miesięczna rata: ".round($monthly,2)."zł";
                }
                break;
                
       }
}

$x = null;
$y = null;
$procent = null;
$result = null;
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParameters($x,$y,$procent);
if ( validate($x,$y,$procent,$messages) ) { // gdy brak błędów
    count_credit($x,$y,$procent,$messages,$result);
}

include 'credit_calc_view.php';
