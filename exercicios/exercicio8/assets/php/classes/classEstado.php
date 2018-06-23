<?php
require_once "database.php";
class Estados{
	private $id;	
	private $nome;
	private $sigla;
	
	public function __construct() {
		$database = new Database();
		$dbSet = $database->dbSet();
		$this->conn = $dbSet;
	}
	function setId($value){
		$this->id = $value;
	}
	function setNome($value){
		$this->nome = $value;
	}
	function setSigla($value){
		$this->sigla = $value;
	}
	
	
	
	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `estados`(`nome`, `sigla`) VALUES (:nome, :sigla)");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":sigla", $this->sigla);
			
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}
	public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `estados` SET `nome` = :nome, `sigla` = :sigla WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":sigla", $this->sigla);
			
			
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}
	
	public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `estados` WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}
	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `estados` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}
	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `estados` WHERE 1 ORDER BY `nome`");
		$stmt->execute();
		return $stmt;
	}
	
}
?>