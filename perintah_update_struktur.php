<?php

    include "koneksi.php";
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $photo      = $_FILES['photo']['name'];
        $photo_tmp  = $_FILES['photo']['tmp_name'];
        $photo_size = $_FILES['photo']['size'];

        $id_nama=htmlspecialchars($_POST["id_nama"]);
        $nama=input($_POST["nama"]);
        $divisi=input($_POST["divisi"]);
        $jabatan=input($_POST["jabatan"]);
        $tahun_masuk=input($_POST["tahun_masuk"]);
        $nip=input($_POST["nip"]);
        $jenis_kelamin=input($_POST["jenis_kelamin"]);
        $tempat_lahir=input($_POST["tempat_lahir"]);
        $tanggal_lahir=input($_POST["tanggal_lahir"]);
        $no_handphone=input($_POST["no_handphone"]);
        $alamat=input($_POST["alamat"]); 

        $sql="update table_struktur set
        nama='$nama',
        divisi='$divisi',
        jabatan='$jabatan',
        tahun_masuk='$tahun_masuk',
        nip='$nip',
        jenis_kelamin='$jenis_kelamin',
        tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        no_handphone='$no_handphone',
        alamat='$alamat',
        foto='$photo'
		where id_nama=$id_nama";
        
        $hasil=mysqli_query($kon,$sql);

        $uploadfile = $_SERVER['DOCUMENT_ROOT'] . '/web-sekolah/img/';
        move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile . $photo);

        if ($hasil) {
            echo '<script language="javascript"> location.href ="struktur_admin.php?msg=succes_edit"; </script>';
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>