<?php
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lakukan pengecekan login di database
    // Contoh pengecekan:
    if ($username == 'admin' && $password == 'password') {
        // Login berhasil, simpan informasi login ke session
        $_SESSION['username'] = $username;

        // Redirect ke halaman dashboard setelah login berhasil
        header("Location: dashboard.php");
        exit();
    } else {
        // Login gagal, tampilkan pesan error
        echo "Username atau password salah.";
    }
}
?>