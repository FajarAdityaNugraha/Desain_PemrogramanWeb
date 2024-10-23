<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['filename'])) {
    $filename = basename($_POST['filename']);
    $target_file = "uploads/" . $filename;

    // Hapus file dari server
    if (file_exists($target_file)) {
        unlink($target_file);
        
        // Hapus dari sesi uploaded_files
        if (isset($_SESSION['uploaded_files'])) {
            $uploaded_files = $_SESSION['uploaded_files'];
            $uploaded_files = array_filter($uploaded_files, function($file) use ($filename) {
                return $file !== $filename;
            });
            $_SESSION['uploaded_files'] = $uploaded_files;
        }
        
        // Redirect ke dashboard dengan pesan sukses
        header("Location: dashboard.php?message=File deleted successfully.");
        exit();
    } else {
        // Jika file tidak ditemukan
        header("Location: dashboard.php?message=File not found.");
        exit();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
