<?php
require_once 'init.php';

switch ($action) {
	default : 
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
                break;
                
	case 'credit' :
		include_once $conf->root_path.'/app/controllers/CalcCtrl.class.php';
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
                break;
            
	case 'BMI_calc' :
                print('brak');
                break;
	
        case 'car_calc' :
                print('brak');
                break;
}
