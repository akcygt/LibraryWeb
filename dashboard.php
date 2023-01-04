<!doctype html>
<html lang="tr">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>

<?php
include "config.php";
include "navbar.php";

$conn = mysqli_connect($host, $user, $password, $dbname);

// giriş yapılmış mı? kontrol edin
if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // giriş yapılmamışsa, uyarı verin ve login sayfasına yönlendirin
    echo "Lütfen giriş yapınız. Bu sayfayı görüntülemek için giriş yapmadan bu sayfayı göremezsiniz.";
    header("Location: login.php");
    exit;
}

// veri tabanındaki verilmesi_gereken_zaman değerini seçin ve sorguyu çalıştırın

$user_id = 1;
echo ($username);
$sql = "SELECT b.id, b.name, b.author, br.borrow_date FROM borrows br
        INNER JOIN books b ON b.id = br.book_id
        INNER JOIN members m ON m.id = br.member_id
        WHERE m.id = $user_id";
$result = mysqli_query($conn, $sql);
$borrowed_books = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Alım Tarihi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($borrowed_books as $book): ?>
      <tr>
        <td><?php echo $book['id']; ?></td>
        <td><?php echo $book['name']; ?></td>
        <td><?php echo $book['author']; ?></td>
        <td><?php echo $book['borrow_date']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php

// Bağlantıyı kapat
mysqli_close($conn);

?>


 <!-- JavaScript dosyalarını dahil edin -->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>