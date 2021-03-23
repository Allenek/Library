<?php
	namespace Models;
	use \PDO;

  class Kategoria extends PDODatabase {
		public function __construct() {
      	$this->table = 'kategoria';
				parent::__construct();
    }
		public function insert($name) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($name))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`Nazwa`)';
					$query .= ' VALUES (:name)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id, $name) {
			$rows = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id, $name))
					throw new AppException();
			try	{
					$query = 'UPDATE `'.$this->table.'` SET `Nazwa` = :name';
					$query .= ' WHERE ID_Kategoria = :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					$stmt->bindValue(':name', $name, PDO::PARAM_STR);
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
