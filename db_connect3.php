<?php

class mydatabase 
{
	public $hostAddress = "localhost";
	public $userName = "root";
	public $password = "";
	public $dbName = "second_db";
	public $link;
	public $message;


	function __construct()
	{
		$this->dbConnect();
	}

	private function dbConnect()
	{
		$this->link = new mysqli($this->hostAddress, $this->userName, $this->password, $this->dbName);

		if ($this->link)
		{
			$this->message = "I did it!";
		}
		else
		{
			$this->message = "Database Not Connected";
		}
	}

	function __destruct()
	{
		$this->link->close();
	}
}

$db = new mydatabase();
echo $db->message;

?>