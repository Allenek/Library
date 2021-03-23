<?php
	namespace Controllers;

	use \Tools\FlashMessage;

	class Access extends Controller {
		// formularz rejestracji
		public function regForm(){
      $this->view->setTemplate('Access/regForm');
		}
		public function register(){
			$model = $this->createModel('Reg');
			if($this->getPost('login')  !== null && $this->getPost('name') !== null && $this->getPost('surname') !== null && $this->getPost('password') !== null) {
				if($model->login($this->getPost('login'),$this->getPost('name'),$this->getPost('surname'),$this->getPost('password')))
					$this->redirect('');
			}
			$this->redirect('formularz-rejestracji/');
		}
	}
