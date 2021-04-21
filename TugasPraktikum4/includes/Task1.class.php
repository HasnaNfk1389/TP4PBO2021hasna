<?php

class Task1 extends DB{
	
	// Mengambil data
	function getTask1(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTask1Deadline(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY deadline_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTask1Matkul(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY matkul_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTask1Kelas(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY kelas_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function getTask1Status(){
		// Query mysql select data ke tb_to_do
		$query = "SELECT * FROM tb_to_do ORDER BY status_td ASC";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function insertTask1($data){
		$tname = $data['tname'];
		$tdeadline = $data['tdeadline'];
		$taddress = $data['taddress'];
		$tmatkul = $data['tmatkul'];
		$tkelas = $data['tkelas'];
		$tstatus = "Belum";

		$query = "INSERT INTO tb_to_do (nama, deadline, address, matkul, kelas, statuss) VALUES ('$tname', '$tdeadline', '$taddress', '$tmatkul', '$tkelas', '$tstatus')";

		// Mengeksekusi query
		return $this->execute($query);
	}

	function deleteTask1($id_Task1){
		$query = "DELETE FROM tb_to_do WHERE id=$id_Task1";

		return $this->execute($query);
	}

	function updateTask1($id){
		$query = "UPDATE tb_to_do SET statuss = 'Sudah' WHERE id = $id";
		return $this->execute($query);
	}
	
}

?>
