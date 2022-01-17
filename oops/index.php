<?php 
	
	// class Employee { //Class

	// 	public $name = "Sharvan"; // Member Properties

	// 	private $salary = 546;

	// 	private $dept = "CS";


	// 	private function calculateSalary() {

	// 		return $this->salary*15;

	// 	}

	// 	public function getEmployeeName() { // Member Function

	// 		echo "This is Kumar";
	// 	}

	// 	public function getEmployeeSalary() {

	// 		return $this->calculateSalary();

	// 	}

	// 	public function getDeptName() {
	// 		return $this->dept;
	// 	}
	// }


	// $object = new Employee; // Object


	// echo $object->getEmployeeSalary();

	// // echo "<pre>";
	// // print_r($object);

	// // echo $object->name = "Amit";

	// // echo "<br>";

	// // $object->getEmployeeName();

	// // echo "<br>";

	// // echo $object->getEmployeeSalary();

	// // echo "<br>";

	// // echo $object->getDeptName();

	// // echo "<br>";

	// // echo $object->salary;

	// // echo "<br>";

	// // echo $object->dept;


	//Setter and getter

	// class Student {

	// 	public $name;
	// 	public $rollNo;
	// 	public $email;

	// 	public function setStudentName($inputName='') {
	// 		$this->name = $inputName;
	// 	}

	// 	public function getStudentName() {
	// 		return $this->name;
	// 	}

	// 	public function setStudentRoll($inputRoll='') {
	// 		$this->rollNo = $inputRoll;
	// 	}

	// 	public function getStudentRoll() {
	// 		return $this->rollNo;
	// 	}

	// 	public function setStudentEmail($inputEmail='') {
	// 		$this->email = $inputEmail;
	// 	}

	// 	public function getStudentEmail() {
	// 		return $this->email;
	// 	}
	// }

	// $studentObject1 = new Student;
	// $studentObject2 = new Student;
	// $studentObject3 = new Student;
	// $studentObject4 = new Student;

	// $studentObject1->setStudentName('Rahul');
	// $studentObject1->setStudentRoll(5454);
	// $studentObject1->setStudentEmail('r@gmail.com');


	// $studentObject2->setStudentName('Ravi');
	// $studentObject2->setStudentRoll(5454);
	// $studentObject2->setStudentEmail('r@gmail.com');

	// echo $studentObject2->getStudentName();
	// echo $studentObject2->getStudentRoll();
	// echo $studentObject2->getStudentEmail();

	// echo "------------------";

	// echo $studentObject1->getStudentName();
	// echo $studentObject1->getStudentRoll();
	// echo $studentObject1->getStudentEmail();


	
	// class Employee {

	// 	public $name;
	// 	public $email;
	// 	public $mobile;

	// 	public function __construct($nameE, $emailE, $mobileE) {
	// 		$this->name = $nameE;
	// 		$this->email = $emailE;
	// 		$this->mobile = $mobileE;
	// 	}


	// 	public function getName() {
	// 		return $this->name;
	// 	}

	// 	public function getEmail() {
	// 		return $this->email;
	// 	}

	// 	public function getMobile() {
	// 		return $this->mobile;
	// 	}

	// 	public function __destruct() {

	// 		unset($this->name);
	// 		unset($this->email);
	// 		unset($this->mobile);
	// 	}
	// }
	

	// $obE = new Employee("Sharvan","s@gmail.com","9835401515");

	// echo $obE->getName();

	// echo $obE->getEmail();

	// echo $obE->getMobile();



	Class Model {

		private $serverName = "localhost";
		private $userName = "root";
		private $password = "";
		private $databaseName = "cepms";
		public $conn;
		public $query;
		public $result;
		public $response;

		public function __construct() {
			$this->dbConnection();
		}

		public function dbConnection() {

			$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);

			if($this->conn) {

				return $this->conn;
			}

		}

		public function getDataFromAnyTable($table) {

			$this->query = "SELECT * FROM  $table";

			$this->result = mysqli_query($this->conn, $this->query);

			while($this->response[] = mysqli_fetch_assoc($this->result)) {
			}

			return array_filter($this->response);
		}

		public function insertData($table, $data) {


			$colName = "`".implode('`,`', array_keys($data))."`";

			$values = "'".implode("','", array_values($data))."'";

			$this->query = "INSERT INTO $table ($colName) VALUES ($values)";
			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;

		}


		public function delete($table, $id) {
			$this->query = "DELETE FROM $table WHERE id = ".$id;

			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;
		}
	}


	$obj = new Model;
	//$allData = $obj->getDataFromAnyTable('categories');

	// $data = array('name' => 'New Cat');

	// $obj->insertData('categories', $data);

	$obj->delete('categories','5');

	// echo "<pre>";

	// print_r($allData);

?>