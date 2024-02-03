<?php
class Skor{
	
	private $conn;
	private $table_name = "ahp_analisa_alternatif";
	
	public $kp;
	public $nak;
	public $hak;
	public $kk;
	public $bb;
	public $kri;
	public $jak;
	
	public function __construct($db){
		$this->conn = $db;
	}

	function read($a, $b, $c, $e)
	{
		$query = "select * from " . $this->table_name . " where alternatif_pertama = '$a' and alternatif_kedua = '$b' and id_kriteria = '$c' and id_responden = '$e'";
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function insert($a,$b,$c,$d, $e){
		
		$query = "insert into ".$this->table_name." values('', '$e','$a','$b','','$c','$d')";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function insert2($a,$b,$c,$d){
		
		$query = "update ".$this->table_name." set hasil_analisa_alternatif = '$a' where alternatif_pertama = '$b' and alternatif_kedua = '$c' and id_kriteria='$d'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function insert3($a, $b, $c){
		
		$query = "insert into ahp_jum_alt_kri values('','$a','$b','$c','','')";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}
	
	function insert4($a, $b, $c){
		
		$query = "update ahp_jum_alt_kri set skor_alt_kri='$a' where id_alternatif='$b' and id_kriteria='$c'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function insert5($a, $b, $c){
		
		$query = "update ahp_jum_alt_kri set jumlah_alt_kri='$a' where id_alternatif='$b' and id_kriteria='$c'";
		$stmt = $this->conn->prepare($query);
		
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
		
	}

	function read5($a, $b)
	{

		$query = "select * from ahp_jum_alt_kri where id_alternatif = '$a' and id_kriteria = '$b'";
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	function readAll(){

		$query = "SELECT * FROM ahp_data_alternatif";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}
	
	function readAlternatif($a){

		$query = "SELECT * FROM ahp_data_alternatif where id_alternatif='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function readAll1($a, $b, $c){

		$query = "SELECT * FROM ahp_matriks_perbandingan_alternatif where id_alternatif_pertama = '$a' and id_alternatif_kedua = '$b' and id_kriteria='$c' LIMIT 0,1";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		$this->kp = $row['nilai_perbandingan'];
	}

	function readAll2(){

		$query = "SELECT * FROM ahp_data_alternatif";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt;
	}

	function readAll3($a, $b){

		$query = "SELECT * FROM ahp_jum_alt_kri where id_alternatif='$a' and id_kriteria='$b' LIMIT 0,1";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->jak = $row['jumlah_alt_kri'];
	}

	function countAll(){

		$query = "SELECT * FROM ahp_data_alternatif";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		return $stmt->rowCount();
	}

	function readSum1($a,$b){

		$query = "SELECT sum(nilai_analisa_alternatif) as jumkr FROM ".$this->table_name." where alternatif_kedua = '$a' and id_kriteria='$b'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr'];
	}

	function sum_matriks_perbandingan_alternatif($a,$b){

		$query = "SELECT sum(nilai_perbandingan) as jumkr FROM ahp_matriks_perbandingan_alternatif where id_alternatif_kedua = '$a' and id_kriteria='$b'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr'];
	}
	
	function readSum2($a,$b){

		$query = "SELECT sum(nilai_normalisasi) as jumkr2 FROM ahp_normalisasi_alternatif where id_alternatif_kedua = '$a' and id_kriteria = '$b'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->nak = $row['jumkr2'];
	}
	
	function readSum3($a){

		$query = "SELECT sum(skor_alt_kri) as bbkr FROM ahp_jum_alt_kri where id_kriteria='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->bb = $row['bbkr'];
	}
	
	function readAvg($a,$c){

		$query = "SELECT avg(nilai_normalisasi) as avgkr FROM ahp_normalisasi_alternatif where id_alternatif_pertama = '$a' and id_kriteria='$c'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->hak = $row['avgkr'];
	}

	function readKri($a){

		$query = "SELECT * FROM ahp_data_kriteria where id_kriteria='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->kri = $row['nama_kriteria'];
	}

	function readRes($a){

		$query = "SELECT * FROM ahp_data_kriteria where id_kriteria='$a'";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();
		
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->kri = $row['nama_kriteria'];
	}
	
	// update the product
	function update($a,$b,$c,$d,$e){

		$query = "UPDATE  ".$this->table_name."  SET nilai_analisa_alternatif = '$b' WHERE alternatif_pertama = '$a' and alternatif_kedua = '$c' and id_kriteria = '$d' and id_responden = '$e'";

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
	function read_alternatif_kriteria($a)
	{
		$query = "select * from " . $this->table_name . " where id_kriteria = '$a'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function read_analisa_alternatif_kriteria($a,$b)
	{
		$query = "select * from " . $this->table_name . " where id_responden = '$a' and id_kriteria = '$b'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function get_analisa_alternatif_kriteria($b)
	{
		$query = "select * from " . $this->table_name . " where id_kriteria = '$b'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function insert_matriks_perbandingan_alternatif($a, $b, $c,$d)
	{

		$query = "insert into ahp_matriks_perbandingan_alternatif values('','$a','$b','$c','$d')";
		echo $query;
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function update_matriks_perbandingan_alternatif($a, $b, $c, $d)
	{ 	
		$query = "UPDATE  ahp_matriks_perbandingan_alternatif  SET nilai_perbandingan = '$b' WHERE id_alternatif_pertama = '$a' and id_alternatif_kedua = '$c' and id_kriteria = '$d'";

		$stmt = $this->conn->prepare($query);
		// execute the query
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}	

	function read_all_matriks_perbandingan_alternatif()
	{
		$query = "select * from ahp_matriks_perbandingan_alternatif";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function read_matriks_perbandingan_alternatif_kriteria($a)
	{
		$query = "select * from ahp_matriks_perbandingan_alternatif WHERE id_kriteria = '$a'";
		$stmt = $this->conn->prepare($query);
		$stmt->execute();

		return $stmt;
	}

	function read_matriks_perbandingan_alternatif($a, $c, $d)
	{
		$query = "select * from ahp_matriks_perbandingan_alternatif WHERE id_alternatif_pertama = '$a' and id_alternatif_kedua = '$c' and id_kriteria = '$d'";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function insert_normalisasi_alternatif($a,$b,$c,$d)
	{
		$query = "insert into ahp_normalisasi_alternatif values('','$a','$b','$c','$d')";
		$stmt = $this->conn->prepare($query);

		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function update_normalisasi_alternatif($a, $b, $c, $d)
	{
		$query = "UPDATE ahp_normalisasi_alternatif  SET nilai_normalisasi = '$b' WHERE id_alternatif_pertama = '$a' and id_alternatif_kedua = '$c' and id_kriteria = '$d'";

		$stmt = $this->conn->prepare($query);
		if ($stmt->execute()) {
			return true;
		} else {
			return false;
		}
	}

	function read_normalisasi_alternatif($a, $c, $d)
	{
		$query = "select * from ahp_normalisasi_alternatif WHERE id_alternatif_pertama = '$a' and id_alternatif_kedua = '$c' and id_kriteria = '$d'";
		$stmt = $this->conn->prepare($query);
		if ($stmt->execute() && $stmt->rowCount() > 0) {
			return true;
		} else {
			return false;
		}
	}

}
?>