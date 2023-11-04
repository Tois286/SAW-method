<?php
include 'database.php';

// Ambil data dari formulir
$kriteria1 = floatval($_POST['kriteria1']); // Konversi input ke FLOAT
$kriteria2 = floatval($_POST['kriteria2']); // Konversi input ke FLOAT
$idMurid = $_POST['idMurid'] ? intval($_POST['idMurid']) : '';

// prepare and bind
$stmt = $conn->prepare("UPDATE tabel_nilai SET kriteria1=?, kriteria2=? WHERE id_matrik=?");
$stmt->bind_param("ddi", $kriteria1, $kriteria2, $idMurid);
$result = $stmt->execute();
if ($result) {
    echo 'data berhasil dimasukan';
    header('Location: murid.php');
} else {
    echo 'data gagal diinputkan';
    header('Location: in_nilai.php');
}

$stmt->close();
$conn->close();
?>
