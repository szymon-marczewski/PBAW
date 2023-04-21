<?php

require_once $conf->root_path . '/assets/lib/smarty/Smarty.class.php';
require_once $conf->root_path . '/assets/lib/Messages.class.php';
require_once $conf->root_path . '/app/calc/CalcForm.class.php';
require_once $conf->root_path . '/app/calc/CalcResult.class.php';

class CalcCtrl {

    private $msgs;
    private $form;
    private $result;

    public function __construct() {

        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams() {
        $this->form->x = isset($_REQUEST ['x']) ? $_REQUEST ['x'] : null;
        $this->form->y = isset($_REQUEST ['y']) ? $_REQUEST ['y'] : null;
        $this->form->pro = isset($_REQUEST ['pro']) ? $_REQUEST ['pro'] : null;
    }


    public function validate() {
        
        if (!(isset($this->form->x) && isset($this->form->y) && isset($this->form->pro))) {
            return false;
        }

        if ($this->form->x == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ($this->form->y == "") {
            $this->msgs->addError('Nie podano liczby lat');
        }

        // nie ma sensu walidować dalej gdy brak parametrów
        if (!$this->msgs->isError()) {

            // sprawdzenie, czy $x i $y są liczbami całkowitymi
            if (!is_numeric($this->form->x)) {
                $this->msgs->addError('Kwota nie jest liczbą');
            }

            if (!is_numeric($this->form->y)) {
                $this->msgs->addError('Liczba lat nie jest liczbą');
            }
        }

        return !$this->msgs->isError();
    }

    public function process() {

        $this->getParams();

        if ($this->validate()) {

            $this->msgs->addInfo('Parametry poprawne.');

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

            $this->msgs->addInfo('Wykonano obliczenia.');
        }

        $this->generateView();
    }
    
    
    public function generateView() {
        global $conf;

        $smarty = new Smarty();
        $smarty->assign('conf', $conf);

        $smarty->assign('msgs', $this->msgs);
        $smarty->assign('form', $this->form);
        $smarty->assign('res', $this->result);

        $smarty->display($conf->root_path.'/app/calc/credit_calc.tpl');
    }

}
