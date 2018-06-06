<?php

require_once "database.php";

class Tests{

	private $id;
	private $user_id;
	private $procedure_id;
	private $date;
	
	


	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}

	function setId($value){
		$this->id = $value;
	}

	function setUser_id($value){
		$this->user_id = $value;
	}

	function setProcedure_id($value){
		$this->procedure_id = $value;
	}

	function setDate($value){
		$this->date = $value;
	}

	
	

	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `tests`(`user_id`, `procedure_id`, `date`)VALUES (:user_id, :procedure_id, :data); )");
			$stmt->bindParam(":user_id", $this->user_id);
			$stmt->bindParam(":procedure_id", $this->procedure_id);
			$stmt->bindParam(":data", $this->date);
						
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `tests` SET `user_id` = :user_id, `procedure_id` = :procedure_id, `date` = :data WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":user_id", $this->user_id);
			$stmt->bindParam(":procedure_id", $this->procedure_id);
			$stmt->bindParam(":data", $this->date);
			
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}
	
	public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `tests` WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `tests` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}

	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `tests` WHERE 1 ORDER BY `user_id` AND `date` DESC ");
		$stmt->execute();
		return $stmt;
	}
	public function all(){
		$sql="SELECT * FROM tests ORDER BY date DESC";
		return $this->db->query($sql);
	}
	public function select($user_id){
		$sql="SELECT tests.id,tests.date,procedures.name,procedures.price FROM tests INNER JOIN procedures ON tests.procedure_id=procedures.id WHERE tests.user_id=".$user_id." ORDER BY tests.date DESC,procedures.name ASC";
	}
	public function select1($procedure_id){
		$sql="SELECT * FROM tests INNER JOIN procedures ON tests.procedure_id=".$procedure_id;
		return $this->db->query($sql);
	}
	public function select2($user_id,$id){
		$sql="SELECT tests.id,tests.date, procedures.name, procedures.price FROM tests INNER JOIN procedures ON tests.procedure_id=procedures.id WHERE tests.user_id=". $user_id." AND tests.id=" .$id." ORDER BY tests.date";
	}
	
}
?>