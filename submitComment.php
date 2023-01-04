<?php
include "config.php";
session_start();

// MySQL veritabanına bağlan
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı kurulamadı: " . mysqli_connect_error());
}

// Gönderilen form verilerini al
$bookId = $_POST['bookId'];
$username = $_SESSION['username'];
$comment = $_POST['comment'];

// Yeni yorumu veritabanına ekle
$sql = "INSERT INTO comments (bookId, username, comment) VALUES (?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "iss", $bookId, $username, $comment);
mysqli_stmt_execute($stmt);

mysqli_stmt_close($stmt);
mysqli_close($conn);

// Kitap sayfasına geri yönlendir
header("Location: kitap.php?id=".$bookId);
exit();