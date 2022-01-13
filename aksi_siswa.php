<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_siswa=$_GET['id_siswa'];
	$sql="DELETE FROM siswa WHERE ID_SISWA = '$id_siswa'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:siswa.php');
}

elseif ($act=='input'){

 	$id_siswa = $_POST["id_siswa"];
 	$id_kelas = $_POST["id_kelas"];
 	$nisn = $_POST["nisn"];
 	$nama_siswa = $_POST["nama_siswa"];
 	$tempat_tgllahir = $_POST["tempat_tgllahir"];
 	$tahun_ajaran = $_POST["tahun_ajaran"];
 	$alamat = $_POST["alamat"];

   $sql="insert into siswa values ('$id_siswa','$id_kelas','$nisn','$nama_siswa','$tempat_tgllahir','$tahun_ajaran','$alamat') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:siswa.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
 	$id_siswa = $_POST["id_siswa"];
 	$id_kelas = $_POST["id_kelas"];
 	$nisn = $_POST["nisn"];
 	$nama_siswa = $_POST["nama_siswa"];
 	$tempat_tgllahir = $_POST["tempat_tgllahir"];
 	$tahun_ajaran = $_POST["tahun_ajaran"];
 	$alamat = $_POST["alamat"];

	$sql = "UPDATE siswa SET ID_KELAS='$id_kelas', NISN='$nisn', NAMA_SISWA='$nama_siswa', TEMPAT_TGLLAHIR='$tempat_tgllahir', TAHUN_AJARAN='$tahun_ajaran', ALAMAT='$alamat' WHERE ID_SISWA='$id_siswa'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	header('location:siswa.php');
	}
	else {echo "gagal";}

}
?>
