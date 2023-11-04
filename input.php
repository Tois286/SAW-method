<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Input Data Murid</title>
</head>

<body>
    <h1>Input Data Murid</h1>
    <?php include 'includes/header.php'; ?>

    <center>
        <?php
        include 'database.php'; // Hubungkan ke database
        
        // Buat perintah SQL untuk mengambil ID dari tabel_murid
        // Buat perintah SQL untuk mengambil ID dari tabel_murid
        $sql = "SELECT MAX(id_matrik) as max_id FROM tabel_nilai";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $next_id = $row['max_id'] + 1; // Mengambil ID berikutnya
        } else {
            $next_id = 1; // Jika tabel kosong, mulai dari ID 1
        }
        ?>

        <form method="POST" action="proses.php">
            <input type="hidden" name="id" value="<?php echo $next_id; ?>">

            <label for="nama">Nama:</label>
            <input type="nama" name="nama" id="nama">

            <label for="kelas">Kelas:</label>
            <input type="kelas" name="kelas" id="kelas">    
            <br><br>
            <input type="submit" value="Simpan">
        </form>
        <?php include 'includes/footer.php'; ?>
    </center>
</body>

</html>