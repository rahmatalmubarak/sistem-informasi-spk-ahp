<?php
class Alternatif{
	
	private $conn;
	private $table_name = "ahp_data_alternatif";
	
	public $id;
	public $nm;
	public $sa;
	public $hs;
	public $nama;
	public $jenis_kelamin;
	public $jabatan;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert(){
		
		$query = "insert into ".$this->table_name." values('',?,?,?,'')";
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
	
	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	function countAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt->rowCount();
	}
	
	function readOne(){
		
		$query = "SELECT * FROM " . $this->table_name . " WHERE id_alternatif=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		
		$this->id = $row['id_alternatif'];
		$this->nama = $row['nama_alternatif'];
		$this->jenis_kelamin = $row['jenis_kelamin'];
		$this->jabatan = $row['jabatan'];
		$this->sa = $row['skor_alternatif'];
		$this->hs = $row['hasil_akhir'];
	}
	
	// update the product
	function update(){

		$query = "UPDATE 
					" . $this->table_name . " 
				SET 
					nama_alternatif = :nama,
					jenis_kelamin = :jenis_kelamin,
					jabatan = :jabatan
				WHERE
					id_alternatif = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nama', $this->nama);
		$stmt->bindParam(':jenis_kelamin', $this->jenis_kelamin);
		$stmt->bindParam(':jabatan', $this->jabatan);
		$stmt->bindParam(':id', $this->id);
		
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif = ?";
		
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	function hapusell($ax){
	
		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif in $ax";
		
		$stmt = $this->conn->prepare($query);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function get_alternatif_responden($a, $b)
	{
		$query = "SELECT * FROM ahp_analisa_alternatif WHERE id_responden = '$a' and id_kriteria = '$b'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}
}
?>