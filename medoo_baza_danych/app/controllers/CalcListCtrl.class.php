<?php

namespace app\controllers;

use app\forms\CreditSearchForm;
use PDOException;

class PersonListCtrl {

	private $form; //dane formularza wyszukiwania
	private $records; //rekordy pobrane z bazy danych

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CreditSearchForm();
	}
		
	public function validate() {
		
		return ! getMessages()->isError();
	}
	
	public function action_creditList(){
		$this->validate();
		
		$search_params = []; //przygotowanie pustej struktury (aby była dostępna nawet gdy nie będzie zawierała wierszy)
		if ( isset($this->form->pro) && strlen($this->form->pro) > 0) {
			$search_params['pro[~]'] = $this->form->pro.'%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = [ "AND" => &$search_params ];
		} else {
			$where = &$search_params;
		}
		
		$where ["ORDER"] = "date";
		
		
		try{
			$this->records = getDB()->select("credit", [
					"idcredit",
					"x",
					"y",
                    "pro",
				], $where );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		
		// 4. wygeneruj widok
		getSmarty()->assign('searchForm',$this->form); // dane formularza (wyszukiwania w tym wypadku)
		getSmarty()->assign('credit',$this->records);  // lista rekordów z bazy danych
		getSmarty()->display('CreditList.tpl');
	}
	
}
