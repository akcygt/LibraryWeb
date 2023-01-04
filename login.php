<?php
// config.php dosyasını dahil edin
include "config.php";
include "navbar.php";

// giriş formunu gönderilmiş mi kontrol edin
if (isset($_POST['submit'])) {
    // formdan gönderilen kullanıcı adı ve şifreyi alın
    $username = $_POST['username'];
    $password = $_POST['password'];

    // veritabanından kullanıcı adı ve şifresine göre bir kayıt arayın
    $query = "SELECT * FROM members WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    // eğer kayıt bulunursa, kullanıcıyı oturum açık olarak işaretleyin ve dashboard sayfasına yönlendirin
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];
        header("Location: dashboard.php");
    }
    else {
        // kayıt bulunamazsa hata mesajı gösterin
        echo "Kullanıcı Adınız Veya Şifreniz Yanlış";
    }
}


if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
    header("Location: dashboard.php");
}
// MySQL bağlantısını kapatın
mysqli_close($conn);
?>
<!doctype html>
<html lang="tr">
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Giriş Yap</title>
</head>
<body>




<!-- giriş formunu oluşturun -->
<form method="post" class="mx-auto" style="width: 300px; margin-top: 20px;">
    <div class="form-group">
        <label for="username">Kullanıcı Adı</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="usernameHelp">
        <small id="usernameHelp" class="form-text text-muted">Lütfen kullanıcı adınızı girin.</small>
    </div>
    <div class="form-group">
        <label for="password">Şifre</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Giriş Yap</button>
</form>
<!-- JavaScript dosyalarını dahil edin -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>