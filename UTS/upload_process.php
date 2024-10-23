<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}

$uploaded_files = isset($_SESSION['uploaded_files']) ? $_SESSION['uploaded_files'] : [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $target_dir = "uploads/";
    // Ubah nama file untuk menghindari spasi
    $filename = preg_replace('/\s+/', '_', basename($_FILES["file"]["name"]));
    $target_file = $target_dir . $filename;
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Cek apakah file sudah ada
    if (file_exists($target_file)) {
        $message = "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Cek ukuran file
    if ($_FILES["file"]["size"] > 500000) { // 500KB limit
        $message = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Izinkan hanya beberapa format file
    if (!in_array($fileType, ['jpg', 'png', 'jpeg', 'gif'])) {
        $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Cek apakah $uploadOk diset ke 0 oleh kesalahan
    if ($uploadOk == 0) {
        $message = "Sorry, your file was not uploaded.";
        $success = false;
    } else {
        // Coba untuk memindahkan file
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            $message = "The file " . htmlspecialchars($filename) . " has been uploaded.";
            $success = true;
            // Simpan nama file ke dalam sesi
            $uploaded_files[] = $filename;
            $_SESSION['uploaded_files'] = $uploaded_files; // Simpan kembali ke sesi
        } else {
            $message = "Sorry, there was an error uploading your file.";
            $success = false;
        }
    }
    // Simpan pesan upload ke dalam sesi untuk ditampilkan
    $_SESSION['upload_message'] = $message;
    header("Location: upload_result.php?success=" . ($success ? '1' : '0'));
    exit();
} else {
    $message = "No file was uploaded.";
    $success = false;
}
?>
