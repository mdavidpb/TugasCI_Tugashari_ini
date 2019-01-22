<?php

include '../connect.php';

$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "INSERT INTO t_guru (nama_guru, jumlah_jam, alamat, telp, email)
          VALUES ('$nama_guru','$jumlah_jam','$alamat','$telp','$email')";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if ($num > 0)
{ echo "Berhasil tambah data"; }
else
{echo "Gagal tambah data";}
echo "<a href='read.php'>Lihat Data</a>";
?>
