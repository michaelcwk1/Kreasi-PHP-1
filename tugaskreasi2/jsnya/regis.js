document.getElementById("registerBtn").addEventListener("click", function(event) {
    // Menghentikan pengiriman form secara default
    event.preventDefault();

    // Mendapatkan nilai dari input
    var username = document.getElementsByName("username")[0].value;
    var password1 = document.getElementsByName("password1")[0].value;
    var password2 = document.getElementsByName("password2")[0].value;

    // Periksa jika ada input yang kosong
    if (username === '' || password1 === '' || password2 === '') {
        // Tampilkan peringatan
        alert("Harap isi semua field!");
    } else {
        // Arahkan pengguna ke halaman login
        window.location.href = "login.php";
    }
});