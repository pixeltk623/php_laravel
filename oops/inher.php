<?php 
	
	Class ParentClass {

		public $name = "Sharvan Kumar";
		private $salary = 54654;

		private $serverName = "localhost";
		private $userName = "root";
		private $password = "";
		private $databaseName = "cepms";
		public $conn;


		public function __construct() {
			$this->dbConnect();
		}

		public function getSalary() {

			return $this->salary;
		}


		public function dbConnect() {
			$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);

			return $this->conn;
		}
	}

	class ChildClass extends ParentClass {
		

		public $query;
		public $result;
		public $response;

		public function __construct() {
			parent::__construct();
		}

		public function getUserName() {
			return $this->name;
		}


		public function getAllCategories() {

			$this->query = "SELECT * FROM `categories`";

			$this->result = mysqli_query($this->conn, $this->query);

			while ($this->response[] = mysqli_fetch_object($this->result)) {
			}

			return array_filter($this->response);

		}

		public function __destruct() {

			unset($this->query);
			unset($this->result);
			unset($this->response);
		}
	}

	// $object = new ParentClass;

	// echo "<pre>";

	// print_r($object->getSalary());	

	$object = new ChildClass;

	echo "<pre>";

	print_r($object->getAllCategories());

?>