<?php

    class database 
	{
		public $hostAddress = "localhost";
		public $userName = "root";
		public $password = "";
		public $dbName = "first_db";
		public $link;
		public $message;


	    function __construct()
			{
				$this->dbConnect();
			}

			private function dbConnect()
			{ 
				$this->link = new mysqli($this->hostAddress, $this->userName, $this->password, $this->dbName);
	 
				if($this->link)
				{
					$this->message = "Database Connected";
				}
				else 
				{
					$this->message = "Database not Connected";
				}
			}

		function __destruct()
			{
				$this->link->close();
			}
		}

?>