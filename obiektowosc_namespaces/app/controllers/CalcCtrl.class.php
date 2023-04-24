<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $form;
    private $result;

    public function __construct() {

        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->x = getFromRequest('x');
        $this->form->y = getFromRequest('y');
        $this->form->pro = getFromRequest('pro');
    }


    public function validate() {
        
        if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->pro))) {
            return false;
        }

        if ($this->form->x == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ($this->form->y == "") {
            getMessages()->addError('Nie podano liczby lat');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!getMessages()->isError()) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (!is_numeric($this->form->x)) {
                getMessages()->addError('Kwota nie jest liczbą');
            }

            if (!is_numeric($this->form->y)) {
                getMessages()->addError('Liczba lat nie jest liczbą');
            }
        }

        return ! getMessages()->isError();
    }

    public function process() {

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
    
    
    public function generateView() {
        getSmarty()->assign('page_title','Przykład 06a');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('res', $this->result);

        getSmarty()->display('credit_calc.tpl');
    }

}
