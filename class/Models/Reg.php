<?php
	namespace Models;


	/**
	 * Obsługa procesu rejestracji
	 */
	class Access extends \Models\PDODatabase {
		function __construct() {
			$this->table = 'user';
			parent::__construct();
		}
		/**
		 * rejestracja
		 */
		public function register($login, $password, $name, $surname) {
			$password=md5($password);
 		  	$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			try	{
					//$query = 'SELECT * FROM ' . $table . ' WHERE login = :login AND password = :password';
					$query = 'INSERT INTO . $table(login, name, surname, password). VALUES($login,$name,$surname,$password)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':login', $login, \PDO::PARAM_STR);
					$stmt->bindValue(':name', $name, \PDO::PARAM_STR);
					$stmt->bindValue(':login', $surname, \PDO::PARAM_STR);
					$stmt->bindValue(':password', md5($password), \PDO::PARAM_STR);
					if($stmt->execute())
					$data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			$user = $data;
 			if(isset($user[0])){
 	        	return true;
 			}
			return false;
		}

	}
