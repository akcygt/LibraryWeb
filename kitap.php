<?php
session_start();

include "config.php";
include "navbar.php";
// MySQL veritabanına bağlanın
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı kurulamadı: " . mysqli_connect_error());
}

// Kitap bilgilerini veritabanından alın
$sql = "SELECT name, description, author, image FROM books WHERE id = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $name, $description, $author, $image);
?>
<style>
.book-container {
  display: flex;
  justify-content: space-between;
}

</style>

<?php if (mysqli_stmt_fetch($stmt)): ?>
    <br><br><br>
    <div class="book-container">
  <img src="/images/<?php echo $image; ?>" style='width:400px;height:600px' class="card-img-top" alt="<?php echo $name; ?>">
  <div class="book-info">
    <h5 class="card-title" style="positon:absolute;left:100px;"><?php echo $name; ?></h5>
    <p class="card-text"><?php echo $description; ?></p>
    <p class="card-text"><strong>Yazar:</strong> <?php echo $author; ?></p>
    </div>
</div>

<?php else: ?>
    <p>Veritabanında böyle bir kitap yok</p>
    <?php endif; ?>


<?php 

mysqli_stmt_close($stmt);

mysqli_close($conn);

?>







<?php
// MySQL veritabanına bağlan (yorumları göstermek için)
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı kurulamadı: " . mysqli_connect_error());
}

// Kitap için yorumları veritabanından al
$sql = "SELECT username, comment, createdAt FROM comments WHERE bookId = ? ORDER BY createdAt DESC";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $_GET['id']);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $username, $comment, $createdAt);

?>


<ul class="list-group">
  <?php while (mysqli_stmt_fetch($stmt)): ?>
    <li class="list-group-item">
      <p><strong><?php echo $username; ?></strong> <?php echo $createdAt; ?></p>
      <p><?php echo $comment; ?></p>
    </li>
  <?php endwhile; ?>
</ul>
<?php 
mysqli_stmt_close($stmt);
mysqli_close($conn);


?>


<?php if (isset($_SESSION['username'])): ?>
    <form action='submitComment.php' method='post'>
  <div class="form-group">
    <input type='hidden' name='bookId' value='<?php echo $_GET['id']; ?>'>
    <label for="comment">Yorumunuz:</label>
    <textarea class="form-control" id="comment" name='comment'></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Yorumu Gönder</button>
</form>
<?php else: ?>
  <p>Yorum yapmak için lütfen giriş yapın</p>
<?php endif; ?>