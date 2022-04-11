<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

  
	private $form;   
	private $result; 
	private $hide_intro; 


	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		$this->hide_intro = true;
	}
	
	public function getParams(){
		$this->form->waga = getFromRequest('waga');
		$this->form->wzrost = getFromRequest('wzrost');
	}
	
	public function validate() {
		if (! (isset ( $this->form->waga ) && isset ( $this->form->wzrost ))) {
			return false;
		} else { 
			$this->hide_intro = false; 
		}
		
		if ($this->form->waga == "") {
			getMessages()->addError('Nie podano wagi');
		}
		if ($this->form->wzrost == "") {
			getMessages()->addError('Nie podano wzrostu');
		}
		
	
		if (! getMessages()->isError()) {
			
			
			if (! is_numeric ( $this->form->waga )) {
				getMessages()->addError('Waga nie jest liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->wzrost )) {
				getMessages()->addError('Wzrost nie są liczbą całkowitą');
			}
		}
		
		return ! getMessages()->isError();
	}
	

	public function process(){

		$this->getParams();
		
		if ($this->validate()) {
				
			if($this->form->waga>0 && $this->form->wzrost>0)
	        {
			$this->form->waga = intval($this->form->waga);
			$this->form->wzrost = intval($this->form->wzrost);

			getMessages()->addInfo('Parametry poprawne.');
				
			$wzrost_koncowy= ($this->form->wzrost/100)*($this->form->wzrost/100);
	        $this->result->result= round(($this->form->waga)/$wzrost_koncowy,2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
			}else getMessages()->addError('Podano wartosci ujemne.');
		}
		
		$this->generateView();
	}

	public function generateView(){
	
		getSmarty()->assign('page_title','Kalkulator BMI');
				
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('result',$this->result);
		getSmarty()->assign('hide_intro',$this->hide_intro);
		
		getSmarty()->display('calc.tpl');
	}
}
