<?php 

include "config.php";
include "navbar.php";


?>



<form action="update_profile.php" method="post">
  Name: <input type="text" name="name"><br>
  Username: <input type="text" name="username"><br>
  Email: <input type="text" name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Update">
</form> 

<?php
  // veritabanı bağlantısını kurun
  $conn = mysqli_connect($host, $user, $password, $dbname);

  // kullanıcı bilgilerini alın
  $sql = "SELECT * FROM members WHERE id='$id'";
  $result = mysqli_query($conn, $sql);

  // kullanıcı bilgilerini döngü ile okuyun
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_array($result);
    echo "Name: " . $row['name'] . "<br>";
    echo "Username: " . $row['username'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "Password: " . $row['password'] . "<br>";
  } else {
    echo "Kullanıcı bilgisi bulunamadı.";
  }

  // bağlantıyı kapatın
  mysqli_close($conn);
?>