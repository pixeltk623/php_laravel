<?php 
	date_default_timezone_set("Asia/Kolkata");
	Class CrudModel {

		private $serverName = "localhost";
		private $userName = "root";
		private $password = "";
		private $databaseName = "cepms";
		public $conn;
		public $query;
		public $result;
		public $response;

		public function __construct() {
			$this->dbConnect();
		}

		public function dbConnect() {
			$this->conn = mysqli_connect($this->serverName, $this->userName, $this->password, $this->databaseName);

			return $this->conn;
		}

		public function getAllCategories($table) {
			$this->query = "SELECT * FROM $table";
			$this->result = mysqli_query($this->conn, $this->query);
			while ($this->response[] = mysqli_fetch_object($this->result)) {
			}
			return array_filter($this->response);
		}

		public function insertData($data, $table) {

			$this->values = "'". implode("','", array_values($data)) ."'";

			$this->colName = "`".implode('`,`', array_keys($data))."`";

			$this->query = "INSERT INTO $table($this->colName) VALUES ($this->values )";

			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;
		}

		public function destroy($id, $table) {
			$this->query = "DELETE FROM $table WHERE id = {$id}";
			$this->result = mysqli_query($this->conn, $this->query);
			return $this->result;
		}

		public function getDataById($id, $table) {

			$this->query = "SELECT * FROM $table WHERE id = {$id}";
			$this->result = mysqli_query($this->conn, $this->query);
			$this->response = mysqli_fetch_object($this->result);

			return $this->response;
		}

		public function updateData($data, $id, $table) {

			$this->query = "UPDATE $table SET `name`='".$data['name']."',`slug`='".$data['slug']."', `updated_at`='".date("Y-m-d H:i:s")."' WHERE id = '$id'";
			$this->result = mysqli_query($this->conn, $this->query);

			return $this->result;

		}
	}
?>