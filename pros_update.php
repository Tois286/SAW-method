<?php
include 'database.php';

// Ambil data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$kriteria1=$_POST['kriteria1'];
$kriteria2=$_POST['kriteria2'];

// Buat query SQL untuk menyimpan data ke dalam tabel_murid
$query1 = "UPDATE tabel_murid SET nama='$nama', kelas='$kelas' WHERE id_matrik=$id";

// Buat query SQL untuk menyimpan data ke dalam tabel_nilai
$query2 = "UPDATE tabel_nilai SET nama='$nama',kriteria1='$kriteria1',kriteria2='$kriteria2' WHERE id_matrik=$id";

// Eksekusi query pertama
if (mysqli_query($conn, $query1)) {
    // Eksekusi query kedua
    if (mysqli_query($conn, $query2)) {
        echo "Data berhasil disimpan ke dalam database.";
        header("Location: penilaian.php");
        exit();
    } else {
        echo "Terjadi kesalahan saat memperbarui tabel_nilai: " . mysqli_error($conn);
    }
} else {
    echo "Terjadi kesalahan saat memperbarui tabel_murid: " . mysqli_error($conn);
}

// Tutup koneksi ke database
mysqli_close($conn);
?>
