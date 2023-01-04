<?php
// oturumu başlatın
session_start();

// oturumu sıfırlayın
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// oturumu kapatın
session_destroy();

// login sayfasına yönlendirin
header("Location: login.php");
exit;
?>