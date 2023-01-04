
<?php

session_start();
include "navbar.php"; 
include "config.php";

// MySQL veritabanına bağlanın
$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Veritabanı bağlantısı kurulamadı: " . mysqli_connect_error());
}

// Kitapları veritabanından alın
$sql = "SELECT id, name, image FROM books";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

?>

<div class="container">
  <div class="row">
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
      <div class="col-md-3">
        <div class="card" style="width: 250px; height: 300px;margin-top:70px;">
        <a href="kitap.php?id=<?php echo $row['id']; ?>"><img style="width:250px;height:300px" class="card-img-top" src="/images/<?php echo $row['image']; ?>"></a>
          <div class="card-body">
            <p class="card-subtitle text-muted">
              <a href="kitap.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a>
            </p>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</div>
    <!-- JavaScript dosyalarını dahil edin -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>