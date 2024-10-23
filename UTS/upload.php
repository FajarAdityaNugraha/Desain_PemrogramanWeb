<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="upload-container">
        <header>
            <h1>Upload Your Files</h1>
            <nav>
                <a href="dashboard.php" class="nav-link">Dashboard</a>
            </nav>
        </header>
        <main>
            <form action="upload_process.php" method="POST" enctype="multipart/form-data" class="upload-form">
                <label for="file">Choose a file to upload:</label>
                <input type="file" id="file" name="file" required>
                <input type="submit" value="Upload" class="upload-button">
            </form>
        </main>
    </div>
</body>
</html>
