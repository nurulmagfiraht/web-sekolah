<?php
include('navbar_backend.php');
include ('perintah_update_struktur.php');
if (isset($_GET['id_nama'])) {
    $id_nama=input($_GET["id_nama"]);
    $id_nama = base64_decode($id_nama);

    $sql="select * from table_struktur where id_nama=$id_nama";
    $hasil=mysqli_query($kon,$sql);
    $data = mysqli_fetch_assoc($hasil);

}
?>
<div class="container-fluid">
<div class="card">
  <div class="card-body">
  <div class="text-center"> <h3>FORM UPDATE DATA STRUKTUR</h3></div>
    <div class="col-sm-12">
    <form action="perintah_update_struktur.php" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" placeholder="Masukkan Nama" required autocomplete="off"/>
     </div>
    <div class="form-group">
        <label for="divisi">Divisi</label>
        <select class="form-control" name="divisi" id="divisi">
        <option selected><?php echo $data['divisi']; ?></option>
            <option value="IPA">IPA</option>
            <option value="SENI">SENI</option>
            <option value="IPS">IPS</option>
            <option value="BK">BK</option>
            <option value="PJOK">PJOK</option>
        </select>
    </div>
    <div class="form-group">
        <label for="jabatan">Jabatan</label>
        <select class="form-control" name="jabatan" id="jabatan">
        <option selected><?php echo $data['jabatan']; ?></option>
            <option value="Guru Mapel">Guru Mapel</option>
            <option value="Guru BK">Guru BK</option>
        </select>
    </div>
    <div class="form-group">
        <label>Tahun Masuk:</label>
        <input type="text" name="tahun_masuk" class="form-control" value="<?php echo $data['tahun_masuk']; ?>" placeholder="Masukkan Tahun Masuk" required autocomplete="off"/>
        </div>
        <input type="hidden" name="id_nama" value="<?php echo $data['id_nama']; ?>" />

    <div class="form-group">
        <label>NIP:</label>
        <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" placeholder="Masukkan NIP" required autocomplete="off"/>
     </div> 

     <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" name="jenis kelamin" id="jenis_kelamin">
        <option selected><?php echo $data['jenis_kelamin']; ?></option>
            <option value="P">P</option>
        </select>
     </div> 

     <div class="form-group">
        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $data['tempat_lahir']; ?>" placeholder="Masukkan Tempat Lahir" required autocomplete="off"/>
     </div> 

     <div class="form-group">
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $data['tanggal_lahir']; ?>" placeholder="Masukkan Tanggal Lahir" required autocomplete="off"/>
     </div> 

     <div class="form-group">
        <label>No.Handphone:</label>
        <input type="text" name="no_handphone" class="form-control" value="<?php echo $data['no_handphone']; ?>" placeholder="Masukkan No.Handphone" required autocomplete="off"/>
     </div>

     <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>" placeholder="Masukkan Alamat" required autocomplete="off"/>
     </div>

     <div class="col-sm-12">
    <!-- <form  method="POST" enctype="multipart/form-data" action="perintah_tambah_foto.php"> -->
    <div class="form-group">
        <label for="Keterangan">Foto Pengurus :</label>
            <div class="form-line">
            </div>
    </div>
    <div class="form-group">
        <image height="100px" width="100px" src="<?php echo "assets/img/noimage.png"; ?>"> </image>
    </div>
    <div class="form-group">
		<input class="input-xxlarge" type="file" name="photo" required />
    </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    
    </form>
    </div>

  </div>
</div>

</div>


<?php
include('footer_backend.php');
?>