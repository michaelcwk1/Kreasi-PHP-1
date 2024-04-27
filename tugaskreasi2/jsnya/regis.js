document.getElementById("submitBtn").addEventListener("click", function() {
    // Ambil data formulir
    var username = document.getElementsByName("username")[0].value;
    var password1 = document.getElementsByName("password1")[0].value;
    var password2 = document.getElementsByName("password2")[0].value;

    // Kirim data ke PHP menggunakan AJAX
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "proses_registrasi.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Respons dari PHP
            console.log(xhr.responseText);
            // Cek jika respons adalah "success" atau kondisi lain yang menandakan proses berhasil
            if (xhr.responseText === "success") {
                // Redirect ke halaman login.php setelah submit berhasil
                window.location.href = "login.php";
            } else {
                // Tampilkan pesan kesalahan atau lakukan tindakan lain jika proses registrasi gagal
                console.log("Registrasi gagal");
            }
        }
    };
    // Kirim data formulir ke proses_registrasi.php
    xhr.send("username=" + username + "&password1=" + password1 + "&password2=" + password2);
});
