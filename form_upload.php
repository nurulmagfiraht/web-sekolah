<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <div class="container" style="margin-top: 130px">
        <div class="row justify-content-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Unggah Form Pendaftaran Siswa Baru</h4>

                    <!-- Form untuk mengunggah file -->
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="formFile">Pilih file dokumen (.docx):</label>
                            <input type="file" class="form-control-file" id="formFile" name="formFile" accept=".docx" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Unggah</button>
                    </form>

                    <!-- Menampilkan pesan sukses atau error -->
                    <?php if (isset($_GET['status'])) : ?>
                        <?php if ($_GET['status'] == 'success') : ?>
                            <div class="alert alert-success mt-3">File berhasil diunggah!</div>
                            <?php if (isset($_SESSION['uploaded_file'])) : ?>
                                <p>
                                    <a href="uploads/<?php echo htmlspecialchars($_SESSION['uploaded_file']); ?>" download class="btn btn-primary">
                                        Klik disini untuk unduh form pendaftaran siswa baru
                                    </a>
                                </p>
                            <?php endif; ?>
                        <?php else : ?>
                            <div class="alert alert-danger mt-3">Terjadi kesalahan dalam mengunggah file.</div>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>