<?php

include("conf.php");
include("includes/Template.class.php");
include("includes/DB.class.php");
include("includes/Task1.class.php");

// Membuat objek dari kelas Task11
$otask1 = new Task1($db_host, $db_user, $db_password, $db_name);
$otask1->open();

// Memanggil metho pada di kelas Task11
if(isset($_POST['deadline'])){
	$otask1->getTask1Deadline();
}else if(isset($_POST['Matkul'])){
	$otask1->getTask1Matkul();
}else if(isset($_POST['Kelas'])){
	$otask1->getTask1Kelas();
}else if(isset($_POST['status'])){
	$otask1->getTask1Status();
}else if(isset($_POST['reset'])){
	$otask1->getTask1();
}else{
	$otask1->gettask1();
}
// Proses mengisi tabel dengan data
$data = null;
$no = 1;

while (list($id, $tname, $tdeadline, $taddress, $tmatkul, $tkelas, $tstatus) = $otask1->getResult()) {
	// Tampilan jika status Task11 nya sudah dikerjakan
	if($tstatus == "Sudah"){
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $taddress . "</td>
		<td>" . $tmatkul . "</td>
		<td>" . $tkelas . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		</td>
		</tr>";
		$no++;
	}

	// Tampilan jika status Task11 nya belum dikerjakan
	else{
		$data .= "<tr>
		<td>" . $no . "</td>
		<td>" . $tname . "</td>
		<td>" . $tdeadline . "</td>
		<td>" . $taddress . "</td>
		<td>" . $tmatkul . "</td>
		<td>" . $tkelas . "</td>
		<td>" . $tstatus . "</td>
		<td>
		<button class='btn btn-danger'><a href='index.php?id_hapus=" . $id . "' style='color: white; font-weight: bold;'>Hapus</a></button>
		<button class='btn btn-success' ><a href='index.php?id_status=" . $id .  "' style='color: white; font-weight: bold;'>Selesai</a></button>
		</td>
		</tr>";
		$no++;
	}
}

if(isset($_POST['add'])){
	$otask1->insertTask1($_POST);
	header("Location:index.php");
}

if(isset($_GET['id_hapus'])){
	$id_task1 = $_GET['id_hapus'];

	$otask1->deletetask1($id_task1);

	unset($_GET['id_hapus']);

	header("Location: index.php");
}

if(isset($_GET['id_status'])){
	$id_status = $_GET['id_status'];

	$otask1->updatetask1($id_status);

	unset($_GET['id_status']);
	
	header("Location: index.php");
}

// Menutup koneksi database
$otask1->close();

// Membaca template skin.html
$tpl = new Template("templates/skin.html");

// Mengganti kode Data_Tabel dengan data yang sudah diproses
$tpl->replace("DATA_TABEL", $data);

// Menampilkan ke layar
$tpl->write();