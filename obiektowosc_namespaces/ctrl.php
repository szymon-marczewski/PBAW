<?php
require_once 'init.php';

switch ($action) {
	default : 
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->generateView ();
                break;
                
	case 'credit' :
		$ctrl = new app\controllers\CalcCtrl();
		$ctrl->process ();
                break;
            
	case 'BMI_calc' :
                print('brak');
                break;
	
        case 'car_calc' :
                print('brak');
                break;
}
