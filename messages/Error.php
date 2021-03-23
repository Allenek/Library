<?php
	namespace Messages;


	final class Error {
    public static $unkonwn = 'Nieoczekiwany błąd aplikacji';
    public static $databaseConnection = 'Błąd połączenia z bazą danych';
		public static $templateNotFound = 'Błąd tworzenia widoku';
		public static $query = 'Błąd zapytania do bazy danych';
		public static $empty = 'Podane wartości nie mogą być puste';
		public static $failed = 'Login lub hasło jest nie prawidłowe';
	}
