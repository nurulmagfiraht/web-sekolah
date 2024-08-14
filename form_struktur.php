<?php
include('navbar_backend.php');
?>
<div class="container">
    <div class="text-center"> <h3>FORM INPUT DATA GURU</h3></div>
    <form action="perintah_struktur_tambah.php" method="post">

    <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="NAMA" class="form-control" placeholder="Masukan Nama" required autocomplete="off"/>
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
        <input type="text" name="tahunmasuk" class="form-control" placeholder="Masukan Tahun Masuk" required autocomplete="off"/>
        </div>
    
    <div class="form-group">
        <label>NIP:</label>
        <input type="text" name="nip" class="form-control" placeholder="Masukan NIP" required autocomplete="off"/>
        </div>

    <div class="form-group">
        <label>Jenis Kelamin:</label>
        <select class="form-control" name="jenis_kelamin" id="Jenis Kelamin">
        <option selected disabled value="">Pilih Jenis Kelamin</option>
            <option value="P">P</option>
            <option value="L">L</option>
        </select>
        </div>

        <div class="form-group">
        <label>Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" required autocomplete="off"/>
        </div>   

        <div class="form-group">
        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir" required autocomplete="off"/>
        </div> 

        <div class="form-group">
        <label>No.Handphone:</label>
        <input type="text" name="no_handphone" class="form-control" placeholder="Masukan No.Handphone" required autocomplete="off"/>
        </div>

        <div class="form-group">
        <label>Alamat:</label>
        <input type="text" name="Alamat" class="form-control" placeholder="Masukan Alamat" required autocomplete="off"/>
        </div>

        <div class="col-sm-12">
    <form  method="POST" enctype="multipart/form-data" action="perintah_tambah_foto.php">
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


        <button type="submit" name="submit" onclick="return confirm('Apakah anda yakin semua data sudah benar ?')" class="btn btn-primary">Submit</button>
    </form>
    </div>
    </form>


    <br><br><br>
 
<?php
include('footer_backend.php');
?>