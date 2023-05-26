<?php
$file = 'uploads/' . $_GET['file'];

// Periksa apakah file ada
if (file_exists($file)) {
    // Hapus file
    if (unlink($file)) {
        echo "File berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan saat menghapus file.";
    }
} else {
    echo "File tidak ditemukan.";
}
?>
