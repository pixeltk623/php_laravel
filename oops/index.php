<?php 
	
// class Employee {
// 	// Access Modefier
// 	// Public 
// 	// privte
// 	// protected

// 	private $name = "Kumar"; 

// 	protected $salary = 546546; 

// 	private function getName() {
// 		echo $this->name;
// 	}


// 	public function getAllDetails() {
// 		$this->getName();
// 	}


// 	public function getSalary() {
// 		echo $this->salary;
// 	}
// }	



// $objectNew = new Employee();

// echo "<pre>";

// print_r($objectNew);

// echo $objectNew->getAllDetails();

// $objectNew->getSalary();	


// class Employee {

// 	public $name;
// 	private $salary;
// 	private $bonus;

// 	public function setBonus($bo) {
// 		$this->bonus = $bo;
// 	}

// 	public function getBonus() {
// 		return $this->bonus;
// 	}


// 	public function setName($name) {
// 		$this->name = $name;
// 	}

// 	public function getName() {
// 		return $this->name;
// 	}

// 	public function setSalary($salary) {
// 		$this->salary = $salary;
// 	}

// 	public function getSalary() {
// 		return $this->salary;
// 	}
// }

// $ob = new Employee();

// $ob->setBonus(54545);
// $ob->setName("Sharvan Kumar");
// $ob->setSalary(2100);

// echo "<pre>";

// print_r($ob->getName());
// print_r($ob->getBonus());
// print_r($ob->getSalary());

class Employee {
	public $name;
	private $salary;
	private $bonus;
	private $serverName = "localhost";
	private $userName = "root";
	private $password = "";
	private $dbName = "crud_kol";
	public $conn;

	public function __construct($name,$salary, $bonus) {
		$this->name = $name;
		$this->salary = $salary;
		$this->bonus = $bonus;

		$this->dbConnection();
	}

	public function dbConnection() {
		$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->dbName);

		return $this->conn;
	}

	public function getSalary()  {

		return $this->salary;
	}

	public function __destruct() {
		unset($this->name);
		unset($this->salary);
		unset($this->bonus);
	}

}



$obj = new Employee("Kumar",2500, 500);

echo "<pre>";

print_r($obj);



?>