<?php
include 'database.php';

// Ambil data dari formulir
$id = $_GET['id'];

// Buat query SQL untuk delet data ke dalam tabel_murid
mysqli_query ($conn,"DELETE FROM tabel_murid WHERE id_matrik='$id'");

// Buat query SQL untuk delet data ke dalam tabel_nilai
mysqli_query ($conn,"DELETE FROM tabel_nilai WHERE id='$id'");

// Tutup koneksi ke database
	
header("Location: murid.php");
mysqli_close($conn);
?>
