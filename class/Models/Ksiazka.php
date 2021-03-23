<?php
	namespace Models;
	use \PDO;

  class Ksiazka extends PDODatabase {
		public function __construct() {
      	$this->table = 'ksiazka';
				parent::__construct();
    }
		public function insert($id_category, $title, $description, $id_publisher, $release_year) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id_category, $title, $description, $id_publisher, $release_year))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`ID_Kategoria`, `Tytul`, `Opis`, `ID_Wydawnictwo`, `Rok_Wydania`)';
					$query .= ' VALUES (:id_category, :title, :description, :id_publisher, :release_year)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_category', $id_category, PDO::PARAM_STR);
					$stmt->bindValue(':title', $title, PDO::PARAM_STR);
					$stmt->bindValue(':description', $description, PDO::PARAM_STR);
					$stmt->bindValue(':id_publisher', $id_publisher, PDO::PARAM_STR);
					$stmt->bindValue(':release_year', $release_year, PDO::PARAM_STR);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id, $ID_Kategoria, $Tytul, $Opis, $ID_Wydawnictwo, $Rok_Wydania) {
			$rows = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id, $ID_Kategoria, $Tytul, $Opis, $ID_Wydawnictwo, $Rok_Wydania))
					throw new AppException();
			try	{
					$query = 'UPDATE `'.$this->table.'` SET `ID_Kategoria` = :ID_Kategoria, `Tytul` = :Tytul, `Opis` = :Opis, `ID_Wydawnictwo` = :ID_Wydawnictwo, `Rok_Wydania` = :Rok_Wydania';
					$query .= ' WHERE ID_Ksiazka = :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					$stmt->bindValue(':ID_Kategoria', $ID_Kategoria, PDO::PARAM_INT);
					$stmt->bindValue(':Tytul', $Tytul, PDO::PARAM_STR);
					$stmt->bindValue(':Opis', $Opis, PDO::PARAM_STR);
					$stmt->bindValue(':ID_Wydawnictwo', $ID_Wydawnictwo, PDO::PARAM_INT);
					$stmt->bindValue(':Rok_Wydania', $Rok_Wydania, PDO::PARAM_STR);
					if($stmt->execute())
						$rows = $stmt->rowCount();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $rows;
		}

		public function selectAllAuthorBooks($id_author)
		{
			$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			if(!isset($id_author))
					throw new AppException();
			try	{
					$query = 'SELECT * FROM ' . $table . ' WHERE ID_Ksiazka IN (SELECT ID_Ksiazka FROM ksiazka_autor WHERE ID_Autor = :id_author)';

					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_author', $id_author, PDO::PARAM_INT);
					if($stmt->execute())
							 $data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $data;
		}

  }
