<?php
class Responden{
	
	private $conn;
	private $table_name = "ahp_data_responden";
	public $nama;
	public $jenis_kelamin;
	public $jabatan;
	public $id;
	
	public function __construct($db){
		$this->conn = $db;
	}
	public function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?)";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nama);
		$stmt->bindParam(2, $this->jenis_kelamin);
		$stmt->bindParam(3, $this->jabatan);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	public function readAll(){
		
		$query = "select * from ".$this->table_name."";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	public function readOne()
	{

		$query = "SELECT * FROM " . $this->table_name . " WHERE id_responden=? LIMIT 0,1";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row['id_responden'];
		$this->nama = $row['nama'];
	}

	public function read_responden()
	{

		$query = "SELECT * FROM " . $this->table_name . " WHERE id_responden=? LIMIT 0,1";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);
		$stmt->execute();
		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	// update the product
	public function update()
	{

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama = :nm,
					jenis_kelamin = :jenis_kelamin,
					jabatan = :jabatan
				WHERE
					id_responden = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nm', $this->nama);
		$stmt->bindParam(':jenis_kelamin', $this->jenis_kelamin);
		$stmt->bindParam(':jabatan', $this->jabatan);
		$stmt->bindParam(':id', $this->id);

		// execute the query
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
	
	// delete the product
	public function delete(){
	
		$query = "DELETE FROM " . $this->table_name;
		
		$stmt = $this->conn->prepare($query);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function countAll()
	{

		$query = "SELECT * FROM " . $this->table_name . " ORDER BY id_responden ASC";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt->rowCount();
	}

	function hapusell($ax)
	{

		$query = "DELETE FROM " . $this->table_name . " WHERE id_responden in $ax";

		$stmt = $this->conn->prepare($query);

		if ($result = $stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

}
?>