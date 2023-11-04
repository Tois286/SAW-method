<!DOCTYPE html>
<html>

<head>
    <title>Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    .text {
        background-color: rgba(255, 255, 255, 0.5); /* Latar belakang putih transparan */
        padding: 60px;
        border-radius: 10px; /* Sudut bulat */
    }

    .text h1 {
        font-size: 15px; /* Ubah ukuran teks judul */
    }
    .image {
        flex: 1;
        padding: 20px;
        background: url('img/fotogue.jpg') no-repeat center center;
        background-size: cover;
        border-radius: 50%; /* Mengatur elemen gambar sebagai lingkaran */
        width: 150px; /* Lebar lingkaran, sesuaikan sesuai kebutuhan */
        height: 150px; /* Tinggi lingkaran, sesuaikan sesuai kebutuhan */
    }
</style>

</head>

<body>
    <h1>Selamat Datang di Sistem Penilaian Murid</h1>
    <?php include 'includes/header.php'; ?>
    <center>
        <p>
            Program ini dibuat oleh Saya "Toto Iswanto | Universitas_Pamulang" dengan tujuan Mengerjakan tugas SPK
            dengan Metode SAW.
        </p>
    </center>
    <div class="container">
        <div class="text">
            <p></p>
            <H1 style="font-size: 25px;">METHODE SAW DIDALAM SPK NILAI MURID</H1>
            <p>
                SPK adalah singkatan dari "Sistem Penunjang Keputusan." Ini adalah konsep dan pendekatan yang digunakan
                dalam ilmu komputer, manajemen, dan ilmu lainnya untuk membantu dalam pengambilan keputusan yang
                kompleks. SPK adalah alat yang digunakan untuk memberikan dukungan dalam proses pengambilan keputusan
                dengan menyediakan informasi, data, dan berbagai metode analisis untuk membantu pengambilan keputusan
                yang lebih baik.

            </p>
            <p>
                pada kesempatan Ini saya akan Menjelaskan Sedikit apa itu methode SAW?
            </p>
            <P>Metode SAW (Simple Additive Weighting) adalah salah satu metode yang digunakan dalam Sistem Pendukung
                Keputusan (SPK) untuk membantu dalam proses pengambilan keputusan dengan memilih alternatif terbaik dari
                beberapa alternatif yang ada. Metode SAW adalah pendekatan yang relatif sederhana, tetapi sering
                digunakan dalam situasi di mana pengambilan keputusan melibatkan beberapa kriteria atau faktor yang
                harus dinilai.Berikut adalah cara kerja dan konsep dasar dari metode SAW:</P>
            <P>Penentuan Kriteria: Pada tahap awal, Anda harus menentukan kriteria-kriteria atau faktor-faktor yang
                relevan untuk pengambilan keputusan. Kriteria ini harus jelas dan terukur. Contoh kriteria dalam kasus
                peringkat universitas dapat mencakup kualitas pendidikan, biaya kuliah, fasilitas, reputasi, dan lain
                sebagainya.<br>

                <br>Penentuan Bobot Kriteria: Setiap kriteria harus diberi bobot untuk menunjukkan tingkat kepentingannya
                dalam pengambilan keputusan. Bobot ini mencerminkan preferensi pengambil keputusan terhadap setiap
                kriteria. Biasanya, bobot dinyatakan dalam bentuk persentase, dan total bobot harus sama dengan 100%.</br>

                <br>Normalisasi Data: Setiap kriteria dapat diukur dengan unit atau skala yang berbeda. Oleh karena itu,
                data kriteria sering dinormalisasi untuk menghindari bias. Normalisasi mengubah data kriteria ke dalam
                rentang 0 hingga 1, di mana 1 mengindikasikan kriteria terbaik dan 0 mengindikasikan kriteria terburuk.
                Normalisasi dapat dilakukan dengan berbagai metode, seperti min-max scaling atau z-score.</br>

                <br>Perhitungan Skor Alternatif: Setelah normalisasi, setiap alternatif dinilai berdasarkan kriteria dengan
                mengalikan nilai kriteria dengan bobot kriteria yang sesuai dan menjumlahkannya. Skor ini menggambarkan
                sejauh mana setiap alternatif memenuhi kriteria.
                Pemilihan Alternatif Terbaik: Alternatif dengan skor tertinggi adalah yang terbaik menurut metode SAW
                dan dianggap sebagai rekomendasi untuk pengambilan keputusan.</br>

                <br>Cara kerja metode SAW dapat dijelaskan dalam langkah-langkah berikut:</br>

                <br>Hitung skor alternatif untuk setiap alternatif dengan mengalikan nilai kriteria dengan bobot kriteria
                yang sesuai dan menjumlahkannya. Pilih alternatif dengan skor tertinggi sebagai alternatif terbaik. Hasil akhir adalah rekomendasi berdasarkan kriteria dan bobot yang telah ditetapkan.
                </br></P>

                <p>Metode SAW sederhana dan mudah dimengerti, tetapi memiliki beberapa kelemahan, seperti kerentanannya terhadap perubahan bobot kriteria dan asumsi bahwa kriteria bersifat independen. Oleh karena itu, perlu hati-hati dalam penggunaannya dan mungkin perlu dikombinasikan dengan analisis sensitivitas atau metode lainnya untuk pengambilan keputusan yang lebih baik.</br>
                <br>Terimakasih telah menyempatkan waktu untuk membaca.</br>
                <br>Sampai Bertemu Kembali.</p>
            </div>

    </div>
    <center>
        <?php include 'includes/footer.php'; ?>
    </center>
</body>

</html>