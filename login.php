<?php
// session_start();
// include 'koneksi/db.php';
// $username = $_POST['username'];
// $password = $_POST['password'];
// $query = "SELECT * FROM users WHERE username='$username'";
// $result = mysqli_query($conn, $query);
// $user = mysqli_fetch_assoc($result);
// if ($user && password_verify($password, $user['password'])) {
//  $_SESSION['user'] = $user['username'];
//  header("Location: dashboard.php");
// } else {
// //  echo "Login gagal. Username atau password salah.";
//     header("Location: index.php");

// }

session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user['username'];
    header("Location: dasboard.php");
    exit();
} else {
    $_SESSION['error'] = "Username atau password salah";
    header("Location: index.php");
    exit();
}
?>