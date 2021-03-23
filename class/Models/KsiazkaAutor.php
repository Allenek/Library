<?php
	namespace Models;
	use \PDO;

  class KsiazkaAutor extends PDODatabase {
		public function __construct() {
      	$this->table = 'ksiazka_autor';
				parent::__construct();
    }
		public function insert($id_book, $id_author) {
			$id = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id_book, $id_author))
					throw new AppException(ErrorName::$empty);
			try	{
					$query = 'INSERT INTO `'.$this->table.'` (
										`ID_Ksiazka`, `ID_Autor`)';
					$query .= ' VALUES (:id_book, :id_author)';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
					$stmt->bindValue(':id_author', $id_author, PDO::PARAM_INT);
					if($stmt->execute())
						$id = $this->pdo->lastInsertId();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $id;
		}

		public function update($id, $id_book, $id_author) {
			$rows = -1;
			$this->testConnection();
			$this->testTable($this->table);
			if(!isset($id, $id_book, $id_author))
					throw new AppException();
			try	{
					$query = 'UPDATE `'.$this->table.'` SET `ID_Ksiazka` = :id_book, `ID_Autor` = :id_author';
					$query .= ' WHERE ID_Ksiazka_Autor = :id';
					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id', $id, PDO::PARAM_INT);
					$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
					$stmt->bindValue(':id_author', $id_author, PDO::PARAM_INT);
					if($stmt->execute())
						$rows = $stmt->rowCount();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $rows;
		}

		public function groupByBook(array $rows)
		{
			$byBook = [];
			foreach ($rows as $v) {
				if ( ! isset($byBook[$v['ID_Ksiazka']]) ) {
					$byBook[$v['ID_Ksiazka']][] = $v;
				} else {
					$byBook[$v['ID_Ksiazka']][] = $v;
				}
			}
			return $byBook;
		}

		public function selectAllBookAuthors($id_book)
		{
			$data = array();
			$this->testConnection();
			$table = $this->getTableName();
			$this->testTable($table);
			if(!isset($id_book))
					throw new AppException();
			try	{
					$query = 'SELECT * FROM ' . $table . ' WHERE ID_Ksiazka = :id_book';

					$stmt = $this->pdo->prepare($query);
					$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
					if($stmt->execute())
							 $data = $stmt->fetchAll();
					$stmt->closeCursor();
			}
			catch(\PDOException $e)	{
					throw new \Exceptions\Query($e);
			}
			return $data;
		}

		public function updateIntelligent(array $given_data, int $book)
		{
			/*
	      coś było ale mogło być odznacone teraz - musimy usunąć
	      czegoś nie było i zstało teraz wybrane - musimy dodac
			*/
			// Co było w bazie
			$what_we_have_before = array_column($this->selectAllBookAuthors($book), 'ID_Autor');
			// Co ma byc w bazie
			$what_we_have_now = $given_data;
			// Co będziemy usuwać
			$to_delete = [];
			// Co będziemy dodawać
			$to_add = [];
			// przechodzimy po tym co chcemy aby pozostało
			foreach ($what_we_have_now as $key => $v) {
				// Jeśli jest to coś czego nie było w bazie
				if (! in_array($v, $what_we_have_before)) {
					// chcemy to dodać
					$to_add[] = $v;
				} else {
					// Jeśli niedopasowano - nie interesuje nas w dalszej części
					unset($what_we_have_before[array_search($v, $what_we_have_before)]);
				}
			}
			// To co pozostało z wyników z bazy a nie zostało dopasowane - chcemy usunąć
			$to_delete = $what_we_have_before;
			// Dodanie wymaganych wierszy
			foreach ($to_add as $author) {
				$this->insert($book, $author);
			}
			// Usunięcie zbędnych wierszy
			foreach ($to_delete as $author) {
				$this->deleteRow($book, $author);
			}
		}

		public function deleteRow($id_book, $id_author) {
				$this->testConnection();
				$table = $this->getTableName();
				$this->testTable($table);
				$counter = 0;
				try	{
						$query = 'DELETE FROM `'.$table.'` WHERE ID_Ksiazka = :id_book AND ID_Autor = :id_author';
						$stmt = $this->pdo->prepare($query);
          	$stmt->bindValue(':id_book', $id_book, PDO::PARAM_INT);
          	$stmt->bindValue(':id_author', $id_author, PDO::PARAM_INT);
						if($stmt->execute())
						  $counter = $stmt->rowCount();
	          else
	            $counter = -1;
						$stmt->closeCursor();
					}
					catch(\PDOException $e)	{
						throw new \Exceptions\Query($e);
					}
					return $counter;
		}

  }
