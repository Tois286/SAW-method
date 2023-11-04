// main.js

// Contoh validasi input, Anda bisa menambahkan validasi sesuai kebutuhan
function validateForm() {
    var idMurid = document.getElementById("id_murid").value;
    var kriteria1 = document.getElementById("kriteria1").value;
    var kriteria2 = document.getElementById("kriteria2").value;

    if (idMurid === "" || kriteria1 === "" || kriteria2 === "") {
        alert("Semua kolom harus diisi.");
        return false;
    }

    // Selanjutnya, Anda dapat menambahkan logika perhitungan SAW di sini.
    // Pastikan mengambil nilai-nilai dari input dan melakukan perhitungan.

    return true; // Kembalikan true jika semua validasi berhasil
}

// Anda juga dapat menambahkan fungsi-fungsi JavaScript lainnya di sini.
