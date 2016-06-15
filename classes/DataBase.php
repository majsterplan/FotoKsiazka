<?php
class DataBase
{
	private $serverName;
	private $userName;
	private $password;
	private $dataBaseName;
	private $connection;

	public function __construct($serverName, $userName, $password, $dataBaseName)
	{
		$this->connection = false;
		$this->serverName = $serverName;
		$this->userName = $userName;
		$this->password = $password;
		$this->dataBaseName = $dataBaseName;
	}

	public function __destruct()
	{

	}

	public function connect()
	{
		if(!$this->connection)
		{
			$this->connection = new mysqli($this->serverName, $this->userName, $this->password, $this->dataBaseName);
			if($this->connection->connect_error)
			{
				$this->connection = false;
				return 10;
			}
		}
		return true;
	}

	public function prepareDataForQuery($data)
	{
		if(!$this->connection)
			return 10;
		return $this->connection->real_escape_string($data);
	}

	public function makeQuery($query)
	{
		if(!$this->connection)
			return 10;
		$status = $this->connection->query($query);
		if(!$status)
			return 11;
		return $status;
	}

	public function disconnect()
	{
		if(!$this->connection)
			return true;
		else
		{
			$status = mysqli_close($this->connection);
			if(!$status)
				return 12;
			$this->connection = false;
			return true;
		}
	} 
}