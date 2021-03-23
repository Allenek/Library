<?php
	namespace Controllers;

	use \Tools\FlashMessage;

	class Access extends Controller {
		// formularz logowania
		public function logForm(){
      $this->view->setTemplate('Access/logForm');
		}
		// loguje do systemu
		public function login(){
			$model = $this->createModel('Access');
			if($this->getPost('login')  !== null && $this->getPost('password') !== null) {
				if($model->login($this->getPost('login'),$this->getPost('password')))
					$this->redirect('');
			}
			\Tools\FlashMessage::addWarning('Login lub hasło jest nie poprawne');
			$this->redirect('formularz-logowania/');
		}
		// wylogowywuje z systemu
		public function logout(){
			$this->createModel('Access')->logout();
			$this->redirect('formularz-logowania/');
		}
		// formularz logowania
		public function regForm(){
      $this->view->setTemplate('Access/regForm');
		}
		// loguje do systemu
		public function register(){
			$model = $this->createModel('Access');
			$this->check(
				[
					'login',
					'password',
					'password_confirm',
					'name',
					'surname'
				],
				$_POST
			);
			if($this->getPost('password') === $this->getPost('password_confirm')) {
				if($model->register(
					$this->getPost('login'),
					$this->getPost('password'),
					$this->getPost('name'),
					$this->getPost('surname')
				) > 0){
					\Tools\FlashMessage::addSuccess('Pomyślnie utworzono konto. Twój login: ' . $this->getPost('login'));
					$this->redirect('');
				}
			}
			\Tools\FlashMessage::addWarning('Wprowadzone dane nie mogą być uznane za poprawne');
			$this->redirect('formularz-rejestracji/');
		}
	}


	