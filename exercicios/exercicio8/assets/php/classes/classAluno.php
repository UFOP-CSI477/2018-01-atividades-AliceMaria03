<?php

require_once "database.php";

class Alunos{

	private $id;
	private $nome;
	private $rua;
	private $numero;
	private $bairro;
	private $cidade_id;
	private $cep;
	private $mail;

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

	function setRua($value){
		$this->rua = $value;
	}

	function setNumero($value){
		$this->numero = $value;
	}

	function setBairro($value){
		$this->bairro = $value;
	}

	function setCidade_id($value){
		$this->cidade_id = $value;
	}
	function setCep($value){
		$this->cep = $value;
	}
	function setMail($value){
		$this->mail = $value;
	}

	public function insert(){
		try{
			$stmt = $this->conn->prepare("INSERT INTO `alunos`(`nome`, `rua`, `numero`, `bairro`, `cidade_id`,`cep`,`mail`) VALUES (:nome, :rua, :numero, :bairro, :cidade_id,:cep,:mail)");
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":rua", $this->rua);
			$stmt->bindParam(":numero", $this->numero);
			$stmt->bindParam(":bairro", $this->bairro);
			$stmt->bindParam(":cidade_id", $this->cidade_id);
			$stmt->bindParam(":cep", $this->cep);
			$stmt->bindParam(":mail", $this->mail);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function edit(){
		try{
			$stmt = $this->conn->prepare("UPDATE `alunos` SET `nome` = :nome, `rua` = :rua, `numero` = :numero, `bairro` = :bairro, `cidade_id` = :cidade_id,`cep` = :cep ,`mail` = :mail  WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->bindParam(":nome", $this->nome);
			$stmt->bindParam(":rua", $this->rua);
			$stmt->bindParam(":numero", $this->numero);
			$stmt->bindParam(":bairro", $this->bairro);
			$stmt->bindParam(":cidade_id", $this->cidade_id);
			$stmt->bindParam(":cep", $this->cep);
			$stmt->bindParam(":mail", $this->mail);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}
	
	public function delete(){
		try{
			$stmt = $this->conn->prepare("DELETE FROM `alunos` WHERE `id` = :id");
			$stmt->bindParam(":id", $this->id);
			$stmt->execute();
			return 1;
		}catch(PDOException $e){
			echo $e->getMessage();
			return 0;
		}
	}

	public function view(){
		$stmt = $this->conn->prepare("SELECT * FROM `alunos` WHERE `id` = :id");
		$stmt->bindParam(":id", $this->id);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_OBJ);
		return $row;
	}

	public function index(){
		$stmt = $this->conn->prepare("SELECT * FROM `alunos` WHERE 1 ORDER BY `nome`");
		$stmt->execute();
		return $stmt;
	}

	
}
?>