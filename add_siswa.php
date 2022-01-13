<!DOCTYPE html>


<?php include'koneksi.php' ?>
<?php include'header.php' ?>

<body id="page-top">
  <div id="wrapper">
    <?php include'sidebar.php' ?>
	
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
		<?php include'topbar.php' ?>
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-left justify-content-between mb-6">
            <h1 class="h3 mb-4 text-gray-800">Tambah Data Siswa</h1>
			
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Tambah Data Siswa</li>
            </ol>		
          </div>
		  
		  <!-- Isi-->
		  <div class="row">
            <div class="col-lg-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Data Siswa</h6>
                </div>
                <div class="card-body">
                  <form method='post' action='aksi_siswa.php?act=input'>
                    <div class="form-group">
                      <label for="ID_SISWA">ID Siswa</label>
                      <input type="text" class="form-control" name="id_siswa" placeholder="masukkan ID Siswa">
                   <br>
                   <div class="form-group">
                      <label for="ID_KELAS">Kelas</label>
                      <select name='id_kelas' class='form-control'>
            <?php                       
            $stid = oci_parse($koneksi, 'SELECT * from kelas');
            oci_execute($stid);
            while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
            $id_kelas = $d["ID_KELAS"];
            $nama_kelas = $d["NAMA_KELAS"];
            echo "<option value='$id_kelas'>$id_kelas</option>";
            }
            ?>
            </select>
            
                    </div>
                    <label for="NISN">NISN</label>
                      <input type="text" class="form-control" name="nisn" placeholder="masukkan nisn">
                   <br>
                    <label for="NAMA_SISWA">Nama Siswa</label>
                      <input type="text" class="form-control" name="nama_siswa" placeholder="masukkan nama siswa">
                    <br>
                    <label for="TEMPAT_TGLLAHIR">Tempat, Tanggal Lahir</label>
                      <input type="text" class="form-control" name="tempat_tgllahir" placeholder="masukkan tempat tanggal lahir">
                    <br>
                    <label for="TAHUN_AJARAN">Tahun Ajaran</label>
                      <input type="text" class="form-control" name="tahun_ajaran" placeholder="masukkan tahun_ajaran">
                      <br>
                    <label for="ALAMAT">Alamat</label>
                      <input type="text" class="form-control" name="alamat" placeholder="masukkan alamat">
                      <br>
                    </div>                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
			  </div>
			  </div>

          

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    
    </div>
  </div>

  

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script> 
<!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

</body>  
</body>

</html>