<?php
include('navbar_backend.php');
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800"><center>DATA GURU</center></h1>
<div class="row">
<div class="col-9"><a href="cetak_data_struktur.php?" target="_blank" class="btn btn-primary" role="button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-printer-fill" viewBox="0 0 16 16">
  <path d="M5 1a2 2 0 0 0-2 2v1h10V3a2 2 0 0 0-2-2H5zm6 8H5a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1z"/>
  <path d="M0 7a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-1v-2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v2H2a2 2 0 0 1-2-2V7zm2.5 1a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
</svg></a></div>
<form action="" method="GET">
        <div class="input-group mb-3">
        <input type="text" name="keyword" class="form-control" placeholder="Masukan Data Yang di cari" autocomplete="off">
        <div class="input-group-append">
        <button type="submit" name="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg></button>
    </div>
</div>
    </form>
    </div>
<?php
    $msg = $_GET['msg'];
        if ($_GET['msg']=="success"){
			echo '
			<div class="alert alert-success" role="alert">
            Data Berhasil di input
            </div>';}
		else if ($_GET['msg']=="succes_edit"){
            echo '
			<div class="alert alert-primary" role="alert">
              Data Berhasil Di Edit
              </div>';}
         else if ($_GET['msg']=="succes_hapus"){
			echo '
            <div class="alert alert-danger" role="alert">
            Data Berhasil Di Hapus
             </div>';}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered"  width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>DIVISI</th>
                        <th>JABATAN</th>
                        <th>TAHUN MASUK</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no     =1;
                    session_start();
                    error_reporting(0);
                    $keyword = $_GET['keyword'];
                    if($keyword != ''){
                    $hasil =mysqli_query($kon, "SELECT * FROM table_struktur WHERE nama LIKE '".$keyword."' or divisi LIKE '".$keyword."'
                    or jabatan LIKE '".$keyword."' or tahun_masuk LIKE '".$keyword."'");
                    $_SESSION['keyword'] = $keyword;
                    } else{
                    $hasil =mysqli_query($kon, "SELECT * FROM table_struktur order by id_nama desc");
                    }
                    $no=0;
                    while ($data = mysqli_fetch_array($hasil)) {
                    $no++;
                    ?>

                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $data['nama'];?></td>
						<td><?php echo $data['divisi'];?></td>
                        <td><?php echo $data['jabatan'];?></td>
                        <td><?php echo $data['tahun_masuk'];?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

<?php
include('footer_backend.php');
?>