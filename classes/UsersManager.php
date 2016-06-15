<?php
require_once("classes/DataBase.php");

class UsersManager
{
	private $dataBase;

	public function __construct()
	{
		$this->dataBase = new DataBase("localhost", "root", "", "fotoksiazka");
	}

	public function __destruct()
	{

	}

	public function validateLogin($login)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		$superLogin = $this->dataBase->prepareDataForQuery($login);
		if(is_int($superLogin))
			return $superLogin;
		$result = $this->dataBase->makeQuery("SELECT id FROM users WHERE login = '" . $superLogin . "'");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;		
		if($result->num_rows != 0)
			return 20;
		return true;
	}

	public function validatePasswords($password, $repassword)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		if($password != $repassword)
			return 21;
		$superPassword = $this->dataBase->prepareDataForQuery($password);
		if(is_int($superPassword))
			return $superPassword;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		if($superPassword != $password)
			return 21;
		return true;
	}

	public function createAccount($login, $password, $email)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		$result = $this->dataBase->makeQuery("INSERT INTO users(id, login, password, email) VALUES (NULL, '" . $login . "', '" . md5($password) . "', '" . $email . "')");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		if($result)
			return true;
	}

	public function validateUser($login, $password)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		$superLogin = $this->dataBase->prepareDataForQuery($login);
		if(is_int($superLogin))
			return $superLogin;
		$superPassword = $this->dataBase->prepareDataForQuery($password);
		if(is_int($superPassword))
			return $superPassword;
		if($superLogin != $login || $superPassword != $password)
			return 22;
		$result = $this->dataBase->makeQuery("SELECT id FROM users WHERE login = '" . $superLogin . "' AND password = '" . md5($superPassword) . "'");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		if($result->num_rows == 0)
			return 22;
		else
		{
			$user = $result->fetch_assoc();
			return $user["id"];
		}
	}

	public function getUserData($id)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		$result = $this->dataBase->makeQuery("SELECT * FROM users WHERE id = '" . $id . "'");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		if($result->num_rows == 0)
			return 23;
		else
		{
			$user = $result->fetch_assoc();
			return $user["login"];
		}
	}
}