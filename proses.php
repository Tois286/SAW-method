<?php
include 'database.php';

// Ambil data dari formulir
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

// Buat query SQL untuk menyimpan data ke dalam tabel_murid
$query1 = "INSERT INTO tabel_murid (id_matrik, nama, kelas) VALUES ('$id', '$nama', '$kelas')";

// Buat query SQL untuk menyimpan data ke dalam tabel_nilai
$query2 = "INSERT INTO tabel_nilai (id_matrik, nama) VALUES ('$id', '$nama')";

// Eksekusi query pertama
if (mysqli_query($conn, $query1)) {
    // Eksekusi query kedua
    if (mysqli_query($conn, $query2)) {
        echo "Data berhasil disimpan ke dalam kedua tabel.";
        header("Location: murid.php");
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
