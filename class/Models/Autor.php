<?php
	namespace Models;
	use \PDO;
	use Exceptions\Application AS AppException;

  class Autor extends PDODatabase {
		public function __construct() {
      	$this->table = 'autor';
				parent::__construct();
    }
		public function insert($name, $surname) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);


			if(!isset($name, $surname))

					throw new AppException(ErrorName::$empty);
			try	{

					$query = 'INSERT INTO `'.$this->table.'` (`Imie`, `Nazwisko`)';
					$query .= ' VALUES (:name, :surname)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					$stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();

			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}
		public function update($id, $name, $surname) {
			$rows = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id, $name, $surname))
					throw new AppException();
			try	{
					$query = 'UPDATE `'.$this->table.'` SET `Imie` = :name, `Nazwisko` = :surname';
					$query .= ' WHERE ID_Autor = :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					$stmt->bindValue(':surname', $surname, PDO::PARAM_STR);
					if($stmt->execute())
						$rows = $stmt->rowCount();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $rows;
		}

  }
