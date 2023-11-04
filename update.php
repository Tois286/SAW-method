<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Murid</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <h1>Update Data Murid</h1>
    <?php include 'includes/header.php'; ?>
    <center>
        <form method="POST" action="pros_update.php">
            <label for="id">ID:</label>
            <input type="id" name="id" id="id"><br>

            <label for="nama">Nama:</label>
            <input type="nama" name="nama" id="nama"><br>

            <label for="kelas">kelas :</label>
            <input type="kelas" name="kelas" id="kelas"><br>

            <label for="kriteria1">kriteria 1 :</label>
            <input type="kriteria1" name="kriteria1" id="kriteria1"><br>

            <label for="kriteria2">kriteria 2 :</label>
            <input type="kriteria2" name="kriteria2" id="kriteria2"><br>
            <br>
            <input type="submit" value="Simpan">
            
        </form>
        <?php include 'includes/footer.php'; ?>
    </center>
</body>

</html>