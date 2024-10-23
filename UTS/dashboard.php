<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

// Mendapatkan daftar file yang diupload
$files = array_diff(scandir('uploads'), array('.', '..')); // Mengambil daftar file yang ada di folder uploads
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <header>
            <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <nav>
                <a href="upload.php" class="nav-link"><i class="fas fa-upload"></i> Upload Files</a>
                <form action="logout.php" method="POST" style="display:inline;">
                    <input type="submit" value="Logout" class="logout-button">
                </form>
            </nav>
        </header>
        <main>
            <section class="welcome-section">
                <h2>Your Dashboard</h2>
                <p>This is your personal dashboard where you can manage your files.</p>
                <p>Use the navigation links above to get started.</p>
            </section>
            <section class="uploaded-files">
                <h2>Uploaded Files</h2>
                <?php if (empty($files)): ?>
                    <p>No files uploaded yet.</p>
                <?php else: ?>
                    <ul>
                        <?php foreach ($files as $file): ?>
                            <li>
                                <?php echo htmlspecialchars($file); ?>
                                <form action="delete_file.php" method="POST" style="display:inline;">
                                    <input type="hidden" name="filename" value="<?php echo htmlspecialchars($file); ?>">
                                    <input type="submit" value="Delete" class="delete-button">
                                </form>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
            </section>
        </main>
    </div>
</body>
</html>
