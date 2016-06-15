<?php
class ErrorConverter
{
	public function __construct()
	{

	}

	public function __destruct()
	{
		
	}

	public function convert($code)
	{
		if(is_int($code))
			switch($code)
			{
				case 10:
					return "Błąd połączenia z bazą danych.";
					break;

				case 11:
					return "Błąd zapytania.";
					break;

				case 12:
					return "Błąd podczas rozłączania z bazą danych.";
					break;

				case 20:
					return "Wybrany login jest zajęty.";
					break;
				
				case 21:
					return "Podane hasła są nieprawidłowe.";
					break;

				case 22:
					return "Podane dane są niepoprawne.";
					break;

				case 23:
					return "Brak danych użytkownika.";
					break;

				case 30:
					return "Tylko obrazki.";
					break;

				case 31:
					return "Błąd podczas wgrywania pliku.";
					break;

				case 32:
					return "Brak obrazów do pokazania.";
					break;

				default:
					return "";
					break;
			}
	}
}