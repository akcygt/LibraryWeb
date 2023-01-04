<?php

error_reporting(0);


// config.php

// MySQL veritabanına bağlanın
$host = "212.107.17.103";
$user = "u686582061_lib";
$password = "1a2b3c4D+";
$dbname = "u686582061_library";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı kurulamadı: " . mysqli_connect_error());
}

// Kullanıcı adını veritabanından alın
session_start();
$username = "";
$kullanici_id = "";
$id = "";
$sql = "SELECT name, id FROM members WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $_SESSION['kullanici_id']);
echo $id;

mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $username, $kullanici_id,);

if (mysqli_stmt_fetch($stmt)) {
    $_SESSION['username'] = $username;
    $_SESSION['members_id'] = $members_id;
}

?>