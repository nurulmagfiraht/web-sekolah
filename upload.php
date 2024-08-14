<?php
session_start();

// Direktori tujuan untuk menyimpan file yang diunggah
$target_dir = "uploads/";
$original_file_name = basename($_FILES["formFile"]["name"]);
$target_file = $target_dir . $original_file_name;
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
        // Rename the file to "formulir.docx"
        $new_file_name = $target_dir . "formulir.docx";
        rename($target_file, $new_file_name);

        // Simpan nama file di session untuk digunakan di halaman lain
        $_SESSION['uploaded_file'] = "formulir.docx";
        header("Location: form_upload.php?status=success");
    } else {
        header("Location: form_upload.php?status=error");
    }
}
