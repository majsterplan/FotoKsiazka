<?php
require_once("classes/DataBase.php");
require_once("classes/UsersManager.php");

class ImagesManager
{
	private $dataBase;

	public function __construct()
	{
		$this->dataBase = new DataBase("localhost", "root", "", "fotoksiazka");
	}

	public function __destruct()
	{

	}

	public function uploadImage($file, $userId, $private)
	{
		$folder = "images/";
		$filePath = $folder . basename($file["name"]);
		$fileName = pathinfo($filePath, PATHINFO_FILENAME);
		$fileExtension = pathinfo($filePath, PATHINFO_EXTENSION);
		$validation = getimagesize($file["tmp_name"]);
		if(!$validation)
			return 30;
		$i = 0;
		while(file_exists($filePath))
		{
			$filePath = $folder . $fileName . "_" .(string) $i . "." . $fileExtension;
			$i = $i + 1;
		}
		if(!move_uploaded_file($file["tmp_name"], $filePath))
			return 31;
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		if(empty($private))
			$private = 0;
		$result = $this->dataBase->makeQuery("INSERT INTO photos(id, path, date, private, Users_id) VALUES (NULL, '" . $filePath . "', '" . date("Y-m-d H:i:s.", filemtime($filePath)) . "', " . $private . ", " . $userId . ")");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		return true;
	}

	public function getImages($userId)
	{
		$connection = $this->dataBase->connect();
		if(is_int($connection))
			return $connection;
		if($userId != -1)
			$result = $this->dataBase->makeQuery("SELECT path, date, private, Users_Id FROM photos ORDER BY date DESC");
		else
			$result = $this->dataBase->makeQuery("SELECT path, date, private, Users_Id FROM photos WHERE private = 0 ORDER BY date DESC");
		if(is_int($result))
			return $result;
		$disconnection = $this->dataBase->disconnect();
		if(is_int($disconnection))
			return $disconnection;
		$images = array();
		if($result->num_rows == 0)
			return 32;
		else
		{
			while($image = $result->fetch_assoc())
			{
				$usersManager = new UsersManager;
				if(file_exists($image["path"]))
				{
					$login = $usersManager->getUserData($image["Users_Id"]);	
					array_push($images, array("path" => $image["path"], "date" => $image["date"], "user" => $login));
				}
			}
		}
		if(count($images) == 0)
			return 32;
		return $images;
	}
}