<?php
$file = 'uploads/' . $_GET['file'];

// Periksa apakah file ada
if (file_exists($file)) {
    // Tentukan header untuk mengunduh file
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($file));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));

    // Baca file dan keluarkan isinya ke output buffer
    readfile($file);
    exit;
} else {
    echo "File tidak ditemukan.";
}
?>
