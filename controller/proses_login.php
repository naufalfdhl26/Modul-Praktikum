<?php
session_start();

// Data dummy untuk simulasi. Nanti ganti dengan pengecekan ke database (MySQL/PDO).
$valid_username = "nopal";
$valid_password = "123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);

    // Verifikasi kredensial
    if ($username === $valid_username && $password === $valid_password) {
        // Set Session
        $_SESSION['user'] = $username;

        // Cek jika Remember Me dicentang
        if ($remember) {
            // Set cookie berlaku 30 hari
            setcookie('username', $username, time() + (86400 * 30), "/"); 
        } else {
            // Hapus cookie jika sebelumnya ada tapi sekarang tidak dicentang
            if(isset($_COOKIE['username'])) {
                setcookie('username', '', time() - 3600, "/");
            }
        }

        // Redirect ke halaman utama dengan PHP (lebih reliable)
        header("Location: ../index.php");
        exit;
    } else {
        // Jika gagal, kembalikan ke halaman login dengan pesan error
        header("Location: ../login.php?error=invalid");
        exit;
    }
} else {
    // Jika akses langsung tanpa POST, redirect ke login
    header("Location: ../login.php");
    exit;
}
?>
