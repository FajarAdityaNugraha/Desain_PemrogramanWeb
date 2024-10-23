<?php
session_start();
session_destroy();
setcookie('username', '', time() - 3600, '/'); // Expire the cookie
header("Location: index.html");
exit();
?>
