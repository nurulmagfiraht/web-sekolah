<?php
session_start();

// Direktori tujuan untuk menyimpan file yang diunggah
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["formFile"]["name"]);
$uploadOk = 1;
$fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Periksa apakah file adalah dokumen .docx
if ($fileType != "docx") {
    $uploadOk = 0;
}

// Periksa apakah $uploadOk adalah 0 karena ada kesalahan
if ($uploadOk == 0) {
    header("Location: form_upload.php?status=error");
} else {
    if (move_uploaded_file($_FILES["formFile"]["tmp_name"], $target_file)) {
        // Simpan nama file di session untuk digunakan di halaman lain
        $_SESSION['uploaded_file'] = basename($_FILES["formFile"]["name"]);
        header("Location: form_upload.php?status=success");
    } else {
        header("Location: form_upload.php?status=error");
    }
}
?>
