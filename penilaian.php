<!DOCTYPE html>
<html>

<head>
    <title>Perhitungan Penilaian</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            // Menambahkan event click pada baris tabel
            $("table").on("click", "tr", function () {
                // Mengambil nilai ID Murid dari data-attribute pada baris yang diklik
                var idMurid = $(this).data("id_murid");
                var kriteria1 = $(this).data("kriteria1");
                var kriteria2 = $(this).data("kriteria2");

                // Menampilkan nilai-nilai murid di inputan
                $("#id_murid").val(idMurid);
                $("#kriteria1").val(kriteria1);
                $("#kriteria2").val(kriteria2);
            });
        });
    </script>
</head>

<body>
    <center>
        <h1>Perhitungan Penilaian</h1>
    </center>
    <center>
        <?php include 'includes/header.php'; ?>
        <?php
        // Hubungkan ke database
        include 'database.php';

        // penerapan methode SAW Menunjuk pada perhitungan grade dan nilai total
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Ambil id murid dan nilai-nilai kriteria dari pengguna
            $idMurid = $_POST['id_murid'];
            $kriteria1 = $_POST['kriteria1'];
            $kriteria2 = $_POST['kriteria2'];

            $sqlNilai = "SELECT nama FROM tabel_nilai WHERE id_matrik = '$idMurid'";
            $resultNilai = $conn->query($sqlNilai);
            $rowNilai = $resultNilai->fetch_assoc();

            // Set nilai kriteria1 dan kriteria2 ke dalam variabel
            $nama = $rowNilai['nama'];

            mysqli_next_result($conn);

            // Query data bobot kriteria dari database
            $sqlBobot = "SELECT * FROM tabel_bobot";
            $resultBobot = $conn->query($sqlBobot);

            if ($resultBobot->num_rows > 0) {
                $bobot = [];
                while ($rowBobot = $resultBobot->fetch_assoc()) {
                    $bobot[$rowBobot['kriteria']] = $rowBobot['bobot'];
                }

                // Hitung nilai total dengan metode SAW
                $nilaiTotal = ($kriteria1 * $bobot['kriteria1']) + ($kriteria2 * $bobot['kriteria2']);

                // Tampilkan hasil perhitungan
                echo "<h3>Hasil Perhitungan</h3>";
                echo "Nama :" . $nama . "<br>";
                echo "Nilai Total: " . $nilaiTotal . "<br>";

                // Tambahkan logika untuk mengkonversi nilai total menjadi nilai A-D sesuai dengan kriteria tertentu
                // Contoh: Jika nilaiTotal >= 80, maka Grade adalah A, jika >= 70, maka Grade adalah B, dan seterusnya.
                $grade = "";
                if ($nilaiTotal >= 80) {
                    $grade = "A (LULUS)";
                } elseif ($nilaiTotal >= 70) {
                    $grade = "B (LULUS)";
                } elseif ($nilaiTotal >= 60) {
                    $grade = "C (GAGAL)";
                } else {
                    $grade = "D (GAGAL)";
                }
                echo "Grade: " . $grade . "<br>";
            } else {
                echo "Tidak ada data bobot kriteria yang ditemukan.";
            }
        }
        ?>
    </center>
    <center>
        <h2>Data Nilai Murid</h2>
    <?php
    // Query data nilai murid dari tabel_nilai
    $sqlNilai = "SELECT * FROM tabel_nilai";
    $resultNilai = $conn->query($sqlNilai);

    if ($resultNilai->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>ID Murid</th><th>Nama</th><th>Kriteria 1</th><th>Kriteria 2</th></tr>";
        while ($rowNilai = $resultNilai->fetch_assoc()) {
            echo "<tr data-id_murid='" . $rowNilai['id_matrik'] . "' data-kriteria1='" . $rowNilai['kriteria1'] . "' data-kriteria2='" . $rowNilai['kriteria2'] . "'>";
            echo "<td>" . $rowNilai['id'] . "</td>";
            echo "<td>" . $rowNilai['id_matrik'] . "</td>";
            echo "<td>" . $rowNilai['nama'] . "</td>";
            echo "<td>" . $rowNilai['kriteria1'] . "</td>";
            echo "<td>" . $rowNilai['kriteria2'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Tidak ada data nilai murid yang ditemukan.";
    }
    ?>
    <button><a href="update.php">update data</a></button>
    </center>
    <center>
        <form method="POST" action="penilaian.php">
            <h2>Hitung Nilai Murid</h2>
            <label for="id_murid">Pilih Murid:</label>
            <select name="id_murid" id="id_murid">
                <?php
                // Ambil daftar murid dari database
                $sqlMurid = "SELECT * FROM tabel_nilai";

                $resultMurid = $conn->query($sqlMurid);
                while ($rowMurid = $resultMurid->fetch_assoc()) {
                    echo "<option value='" . $rowMurid['id_matrik'] . "'>" . $rowMurid['nama'] . "</option>";
                    
                }
                ?>
            </select>
            <?php
            // Setelah memilih murid, ambil nilai kriteria dari database
            if (isset($_POST['id_murid'])) {
                $selectedMurid = $_POST['id_murid'];
                $sqlNilai = "SELECT nama,kriteria1, kriteria2 FROM tabel_nilai WHERE id_matrik = '$selectedMurid'";
                $resultNilai = $conn->query($sqlNilai);
                $rowNilai = $resultNilai->fetch_assoc();

                // Set nilai kriteria1 dan kriteria2 ke dalam variabel
                $nama = $rowNilai['nama'];
                $kriteria1 = $rowNilai['kriteria1'];
                $kriteria2 = $rowNilai['kriteria2'];
            }
            ?>
            <!-- Input nilai-nilai untuk setiap kriteria -->
            <input type="hidden" name="nama" id="nama" value="<?php echo isset($nama) ? $nama: ''; ?>"><br>

            <label for="kriteria1">Kriteria 1:</label>
            <input type="kriteria1" name="kriteria1" id="kriteria1" value="<?php echo isset($kriteria1) ? $kriteria1 : ''; ?>"><br>

            <label for="kriteria2">Kriteria 2:</label>
            <input type="kriteria2" name="kriteria2" id="kriteria2" value="<?php echo isset($kriteria2) ? $kriteria2 : ''; ?>">

            <!-- Tambahkan input untuk kriteria lainnya sesuai kebutuhan -->
            <br>
            <input type="submit" value="Hitung Nilai"></input>
        </form>
    </center>
    <center>
        <?php include 'includes/footer.php'; ?>
    </center>
</body>

</html>
