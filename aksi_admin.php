<?php
include("koneksi.php");

$act=$_GET['act'];

if ($act=='delete'){
	$id_admin=$_GET['id_admin'];
	$sql="DELETE FROM admin_tu WHERE ID_ADMIN = '$id_admin'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);
	header('location:admin_tu.php');
}

elseif ($act=='input'){

 	$id_admin = $_POST["id_admin"];
 	$nama_admin = $_POST["nama_admin"];
 	$no_hp = $_POST["no_hp"];

   $sql="insert into admin_tu values ('$id_admin','$nama_admin','$no_hp') ";
   $prepare = ociparse($koneksi, $sql);
   ociexecute($prepare);
   oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:admin_tu.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$id_admin = $_POST["id_admin"];
	$nama_admin = $_POST["nama_admin"];
 	$no_hp = $_POST["no_hp"];

	$sql = "UPDATE admin_tu SET NAMA_ADMIN='$nama_admin', NO_HP='$no_hp' WHERE ID_ADMIN='$id_admin'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare)
	{
	 header('location:admin_tu.php');
	}
	else {echo "gagal";}

}
?>