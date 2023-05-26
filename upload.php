<?php
header('Cache-Control: no-store, no-cache, must-revalidate');

$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Periksa apakah file sudah ada
if (file_exists($targetFile)) {
    echo "File sudah ada.";
    $uploadOk = 0;
}

// Periksa ukuran file (maksimal 2MB)
if ($_FILES["fileToUpload"]["size"] > 2 * 1024 * 1024) {
    echo "Ukuran file terlalu besar.";
    $uploadOk = 0;
}

// Batasi jenis file yang diperbolehkan
if ($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg" && $fileType != "gif" && $fileType != "txt" && $fileType != "csv") {
    echo "Jenis file yang diperbolehkan hanya JPG, JPEG, PNG, GIF, TXT, dan CSV.";
    $uploadOk = 0;
}

// Jika tidak ada masalah, pindahkan file ke folder tujuan
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "File berhasil diunggah.";
    } else {
        echo "Terjadi kesalahan saat mengunggah file.";
    }
}
?>
