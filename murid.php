<!DOCTYPE html>
<html>

<head>
    <title>Data Murid</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
    <h1>Data Murid</h1>
    <?php include 'includes/header.php'; ?>


    <?php
    // Hubungkan ke database
    include 'database.php';

    // Query data murid dari database
    $sql = "SELECT * FROM tabel_murid";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID Murid</th><th>Nama Murid</th><th>Kelas</th><th>action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id_matrik'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['kelas'] . "</td>";
            echo "<td><a href='in_nilai.php?id=" . $row['id_matrik'] . "'>Input Nilai</a>|<a href='delet.php?id=" . $row['id_matrik'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data murid yang ditemukan.";
    }

    $conn->close();
    ?>
    <center>
        <button><a href="input.php">Tambah Murid</a></button>
    </center>
    <center>
        <?php include 'includes/footer.php'; ?>
    </center>
</body>

</html>