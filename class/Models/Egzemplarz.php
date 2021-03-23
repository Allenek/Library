<?php
	namespace Models;
	use \PDO;

  class Egzemplarz extends PDODatabase {
		public function __construct() {
      	$this->table = 'egzemplarz';
				parent::__construct();
    }
		public function insert($id_book, $signature, $price, $condition) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id_book, $signature, $price, $condition))
					throw new \Exceptions\Application();
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`ID_Ksiazka`,`Sygnatura`, `Cena_Zakupu`, `Stan` )';
					$query .= ' VALUES (:id_book, :signature, :price, :condition)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
					$stmt->bindValue(':signature', $signature, PDO::PARAM_STR);
					$stmt->bindValue(':price', $price, PDO::PARAM_STR);
					$stmt->bindValue(':condition', $condition, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id_copy,$id_book, $signature, $price, $condition) {
			$rows = -1;
			$this->testConnection();
			$this->testTable($this->table);

			if(!isset($id_copy,$id_book, $signature, $price, $condition))
					throw new \Exceptions\Application();
			try	{
					$query = 'UPDATE `'.$this->table.'` SET `ID_Ksiazka` = :id_book, `Sygnatura` = :signature, `Cena_Zakupu` = :price, `Stan` = :condition';
					$query .= ' WHERE ID_Egzemplarz = :id_copy';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_copy', $id_copy, PDO::PARAM_INT);
					$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
					$stmt->bindValue(':signature', $signature, PDO::PARAM_STR);
					$stmt->bindValue(':price', $price, PDO::PARAM_STR);
					$stmt->bindValue(':condition', $condition, PDO::PARAM_STR);
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
