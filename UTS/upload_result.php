<?php
session_start();
$message = isset($_SESSION['upload_message']) ? $_SESSION['upload_message'] : "No message available.";
unset($_SESSION['upload_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="result-container">
        <h1>Upload Result</h1>
        <p><?php echo htmlspecialchars($message); ?></p>
        <a href="upload.php" class="nav-link">Upload Another File</a>
        <a href="dashboard.php" class="nav-link">Go to Dashboard</a>
    </div>
</body>
</html>
