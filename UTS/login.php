<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'fajar' && $password == 'fajar') {
        $_SESSION['username'] = $username;
        setcookie('username', $username, time() + (86400 * 30), "/"); // 30 days
        header("Location: dashboard.php");
        exit();
    } else {
        // Jika username atau password salah, set flag untuk menampilkan alert
        $error = "Invalid username or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
    <script>
        // Jika ada pesan kesalahan, tampilkan alert
        window.onload = function() {
            const error = "<?php echo isset($error) ? $error : ''; ?>";
            if (error) {
                alert(error);
            }
        }
    </script>
</head>
<body>
    <div class="login-container">
        <form action="login.php" method="POST">
            <h1>Login</h1>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
