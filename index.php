<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload dan Unduh File</title>
</head>

<body>
    <h2>Form Upload File</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>

    <h2>Daftar File yang Diunggah</h2>
    <?php
    // Menampilkan daftar file di folder uploads
    $folder = 'uploads/';
    $files = scandir($folder);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            echo $file . ' <a href="download.php?file=' . urlencode($file) . '">Unduh</a> ';
            echo '<a href="delete.php?file=' . urlencode($file) . '">Hapus</a><br>';
        }
    }
    ?>
</body>

</html>