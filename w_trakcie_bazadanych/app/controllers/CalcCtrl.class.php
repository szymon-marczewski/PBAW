<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;
use DateTime;
use PDOException;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct() {

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function validate() {
        $this->form->x = getFromRequest('x',true,'Błędne wywołanie aplikacji');
        $this->form->y = getFromRequest('y',true,'Błędne wywołanie aplikacji');
        $this->form->pro = getFromRequest('pro',true,'Błędne wywołanie aplikacji');
    
        if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->pro))) {
            return false;
        }

        if (empty(trim($this->form->x))) {
            getMessages()->addError('Nie podano kwoty');
        }
        if (empty(trim($this->form->y)))  {
            getMessages()->addError('Nie podano liczby lat');
        }

        if (!getMessages()->isError()) return false;

        return ! getMessages()->isError();
    }

    public function action_credit() {

        $this->getParams();

        if ($this->validate()) {

            getMessages()->addInfo('Parametry poprawne.');

            switch ($this->form->pro) {
                case 'low':
                    $months = $this -> form -> y * 12;
                    $this -> result -> result = "Miesięczna rata: ".round((($this -> form -> x + ($this -> form -> x * 0.15))/ $months), 2)."zł";
                    break;

                case 'medium':
                    $months = $this -> form -> y * 12;
                    $this -> result -> result = "Miesięczna rata: ".round((($this -> form -> x + ($this -> form -> x * 0.18))/ $months), 2)."zł";
                    break;

                case 'high':
                    $months = $this -> form -> y * 12;
                    $this -> result -> result = "Miesięczna rata: ".round((($this -> form -> x + ($this -> form -> x * 0.21))/ $months), 2)."zł";
                    break;
            }

            getMessages()->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }
    
    public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
    }
    
    public function generateView() {
        getSmarty()->assign('page_title','Ochrona');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('credit_calc.tpl');
    }

}
