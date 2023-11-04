<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>input Data Murid</title>
</head>

<body>
<?php
include 'database.php';
$idMurid = $_GET['id'] ? $_GET['id'] : '';

// // Buat query SQL untuk mengambil nilai id dari tabel tertentu
// $sql = "SELECT id_matrik FROM tabel_murid";
// // Eksekusi query
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // Loop melalui hasil query jika ada data
//     while ($row = $result->fetch_assoc()) {
//         $id = $row['id_matrik'];
//         // Lakukan sesuatu dengan nilai id, misalnya tampilkan atau gunakan untuk keperluan lain
//         echo $id;
//     }
// } else {
//     echo "Tidak ada data yang ditemukan.";
// }

// Tutup koneksi ke database
$conn->close();
?>

    <h1>Input Data Murid</h1>
    <?php include 'includes/header.php'; ?>
    <center>
        <form method="POST" action="pros_nilai.php">
            <!-- <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama"> -->

            <input type="hidden" value="<?= $idMurid; ?>" name="idMurid">

            <label for="kriteria1">Kriteria 1:</label>
            <input type="kriteria1" name="kriteria1" id="kriteria1">

            <label for="kriteria2">Kriteria 2:</label>
            <input type="kriteria2" name="kriteria2" id="kriteria2">

            <input type="submit" value="Simpan">
            <?php include 'includes/footer.php'; ?>
        </form>
    </center>
</body>

</html>