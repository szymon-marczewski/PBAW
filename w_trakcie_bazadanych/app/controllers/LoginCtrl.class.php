<?php

namespace app\controllers;

use app\transfer\User;
use app\forms\LoginForm;

class LoginCtrl{
	private $form;
	
	public function __construct(){
		$this->form = new LoginForm();
	}
	
	public function validate() {
		$this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');

		if (!isset($this->form->login)) return false;
			
		if (empty($this->form->login)) {
			getMessages()->addError('Nie podano loginu');
		}
		if (empty($this->form->pass)) {
			getMessages()->addError('Nie podano hasła');
		}

		if (getMessages()->isError()) return false;
		
		if ($this->form->login == "admin" && $this->form->pass == "admin") {
			addRole('admin');
		} else if ($this->form->login == "user" && $this->form->pass == "user") {
			addRole('user');
		} else {
			getMessages()->addError('Niepoprawny login lub hasło');
		}
		
		return ! getMessages()->isError();
	}
	
	public function action_loginShow(){
		$this->generateView(); 
	}

	public function action_login(){
		if ($this->validate()){
			//zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
			getMessages()->addError('Poprawnie zalogowano do systemu');
		} else {
			//niezalogowany => pozostań na stronie logowania
			$this->generateView(); 
		}		
		
	}
	
	public function action_logout(){
		
		session_destroy();

		$this->generateView();		 
	}
	
	public function generateView(){
		
		getSmarty()->assign('page_title','Strona logowania');
		getSmarty()->assign('form',$this->form);
		getSmarty()->display('LoginView.tpl');		
	}
}