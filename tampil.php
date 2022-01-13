<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP Dan Oracle</title>
</head>
<body>
	<center>
		<h2>CRUD DATA SISWA</h2>
		<center><table border="1">
			<tr>
				<th>ID Siswa</th>
				<th>ID Kelas</th>
				<th>NISN</th>
				<th>Nama Siswa</th>
				<th>TTL</th>
				<th>Tahun Ajaran</th>
				<th>Alamat</th>				
			</tr>
			<?php
			include 'koneksi.php';
			$stid = oci_parse($koneksi, 'SELECT * from siswa');
			oci_execute($stid);
			while (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
			?>
			<tr>
				<td><?php echo $d['ID_SISWA']; ?></td>
				<td><?php echo $d['ID_KELAS']; ?></td>				
				<td><?php echo $d['NISN']; ?></td>
				<td><?php echo $d['NAMA_SISWA']; ?></td>
				<td><?php echo $d['TEMPAT_TGLLAHIR']; ?></td>
				<td><?php echo $d['TAHUN_AJARAN']; ?></td>
				<td><?php echo $d['ALAMAT']; ?></td>
                <td>
                	edit | delete
                </td>
             </tr>
             <?php
            }
             ?>
    </table>
	</center>
</body>
</html>