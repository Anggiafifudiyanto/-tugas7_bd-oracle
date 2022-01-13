<?php
include("koneksi.php");
$hari_ini = date("dmY");

$act=$_GET['act'];

if ($act=='input'){
echo	$id_siswa = $_POST['id_siswa'];
echo	$id_admin = $_POST['ID_ADMIN'];
echo	$bulan = $_POST['bulan'];
echo	$jumlah_bayar = $_POST['jumlah_bayar'];

	$sql = "INSERT INTO spp VALUES ('','$id_siswa','$id_admin', '$bulan', '$jumlah_bayar',  '$hari_ini')";
	$prepare = ociparse($koneksi, $sql);
    ociexecute($prepare);
    oci_commit($koneksi);
   

	if($prepare)
	{
	//header('location:laporan.php');
	}
	else {echo "gagal";} 

}

?>
