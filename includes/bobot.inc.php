<?php
class Bobot{
	
	private $conn;
	private $table_name = "ahp_analisa_kriteria";
	
	public $kp;
	public $nak;
	public $hak;
	public $kk;
	public $bb;
	
	public function __construct($db){
		$this->conn = $db;
	}
	
	function insert($a,$b,$c,$d){
		
		$query = "insert into ".$this->table_name." values('','$d','$a','$b','','$c')";
		$stmt = $this->conn->prepare($query);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function read($a,$b,$c){
		
		$query = "select * from ".$this->table_name." where kriteria_pertama = '$a' and kriteria_kedua = '$b' and id_responden = '$c'";
		$stmt = $this->conn->prepare($query);
		if($stmt->execute() && $stmt->rowCount() > 0){
			return true;
		}else{
			return false;
		}
		
	}

	function read_analisa_kriteria_all($a)
	{
		$query = "select * from " . $this->table_name . " where id_responden = '$a'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		return $stmt;
	}

	function read2($a,$b,$c){
		
		$query = "select * from ".$this->table_name." where kriteria_pertama = '$a' and kriteria_kedua = '$b' and id_responden = '$c'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute() && $stmt->rowCount() > 0){
			return true;
		}else{
			return false;
		}
		
	}

	function read_analisa_kriteria(){
		
		$query = "select * from ".$this->table_name."";
		$stmt = $this->conn->prepare($query);

		$stmt->execute();
		return $stmt;
		
	}

	function insert2($a,$b,$c){
		
		$query = "update ".$this->table_name." set hasil_analisa_kriteria = '$a' where kriteria_pertama = '$b' and kriteria_kedua = '$c'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function insert3($a, $b){
		
		$query = "update ahp_data_kriteria set jumlah_kriteria='$a' where id_kriteria='$b'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function insert4($a, $b){
		
		$query = "update ahp_data_kriteria set bobot_kriteria='$a' where id_kriteria='$b'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function readAll(){

		$query = "SELECT * FROM ahp_data_kriteria";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function readAll1($a, $b, $c){

		$query = "SELECT * FROM ".$this->table_name." where kriteria_pertama = '$a' and kriteria_kedua = '$b' and id_responden = '$c' LIMIT 0,1";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->kp = $row['nilai_analisa_kriteria'];
		$this->nak = $row['kriteria_pertama'];
		$this->hak = $row['kriteria_kedua'];
	}

	function readAll2(){

		$query = "SELECT * FROM ahp_data_kriteria";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function countAll(){

		$query = "SELECT * FROM ahp_data_kriteria";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt->rowCount();
	}

	function readSum1($a, $b){

		$query = "SELECT sum(nilai_analisa_kriteria) as jumkr FROM ".$this->table_name." where kriteria_kedua = '$a' and id_responden = '$b'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr'];
	}
	
	function readSum2($a,$b){

		$query = "SELECT sum(hasil_analisa_kriteria) as jumkr2 FROM ".$this->table_name." where kriteria_kedua = '$a' and id_responden = '$b'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr2'];
	}
	
	function readSum3(){

		$query = "SELECT sum(bobot_kriteria) as bbkr FROM ahp_data_kriteria";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->bb = $row['bbkr'];
	}
	
	function readAvg($a){

		$query = "SELECT avg(hasil_analisa_kriteria) as avgkr FROM ".$this->table_name." where kriteria_pertama = '$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->hak = $row['avgkr'];
	}
	
	// update the product
	function update($a,$b,$c, $d){

		$query = "UPDATE  ".$this->table_name."  SET nilai_analisa_kriteria = '$b' WHERE kriteria_pertama = '$a' and kriteria_kedua = '$c' and id_responden = '$d'";

		$stmt = $this->conn->prepare($query);
		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	
	// delete the product
	function delete(){
	
		$query = "DELETE FROM " . $this->table_name;
		
		$stmt = $this->conn->prepare($query);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	public function insert_matriks_perbandingan($a,$b,$c)
	{
		$query = "INSERT INTO ahp_matriks_perbandingan_kriteria VAlUES ('', '$a', '$b', '$c')";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function read_all_matriks_perbandingan()
	{
		$query = "SELECT * FROM ahp_matriks_perbandingan_kriteria";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		
		return $stmt;
		
	}

	public function read_all_nilai_matriks_perbandingan($a, $b)
	{
		$query = "SELECT * FROM ahp_matriks_perbandingan_kriteria where id_kriteria_pertama = '$a' and id_kriteria_kedua = '$b' LIMIT 0,1";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->kp = $row['nilai_perbandingan'];
	}
	
	public function read_matriks_perbandingan($a, $b)
	{
		$query = "SELECT * FROM ahp_matriks_perbandingan_kriteria WHERE id_kriteria_pertama = '$a' AND id_kriteria_kedua = '$b'";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function update_matriks_perbandingan($a,$b,$c)
	{
		$query = "UPDATE ahp_matriks_perbandingan_kriteria SET nilai_perbandingan = '$c' WHERE id_kriteria_pertama = '$a' AND id_kriteria_kedua = '$b'";
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
	function sum_matriks_perbandingan($a, $b)
	{

		$query = "SELECT sum(nilai_perbandingan) as jumkr FROM ahp_matriks_perbandingan_kriteria where id_kriteria_kedua = '$a'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr'];
	}
	
	public function insert_normalisasi_kriteria($a,$b,$c)
	{
		$query = "INSERT INTO ahp_normalisasi_kriteria VAlUES ('', '$a', '$b', '$c')";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	public function read_all_normalisasi_kriteria()
	{
		$query = "SELECT * FROM ahp_normalisasi_kriteria";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		
		return $stmt;
		
	}

	public function read_all_nilai_normalisasi_kriteria($a, $b)
	{
		$query = "SELECT * FROM ahp_normalisasi_kriteria where id_kriteria_pertama = '$a' and id_kriteria_kedua = '$b' LIMIT 0,1";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->kp = $row['nilai_perbandingan'];
	}
	public function read_normalisasi_kriteria($a, $b)
	{
		$query = "SELECT * FROM ahp_normalisasi_kriteria WHERE id_kriteria_pertama = '$a' AND id_kriteria_kedua = '$b'";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function update_normalisasi_kriteria($a,$b,$c)
	{
		$query = "UPDATE ahp_normalisasi_kriteria SET nilai_normalisasi = '$c' WHERE id_kriteria_pertama = '$a' AND id_kriteria_kedua = '$b'";
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}
	function sum_normalisasi_kriteria($a, $b)
	{

		$query = "SELECT sum(nilai_perbandingan) as jumkr FROM ahp_normalisasi_kriteria where id_kriteria_kedua = '$a'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr'];
	}

	
}
?>