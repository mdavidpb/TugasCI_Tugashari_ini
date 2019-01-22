<?php
if (!(isset($_POST['btnSimpan'])))
{
  header("location: read.php");
}

include '../connect.php';

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];
$Jurusan = $_POST['Jurusan'];
$Kelas = $_POST['Kelas'];
$mapel = $_POST['mapel'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "UPDATE t_guru SET nama_guru = '$nama_guru',
                                telp = '$telp',
                                jumlah_jam = '$jumlah_jam',
                                Jurusan = '$Jurusan',
                                Kelas = '$Kelas',
                                mapel = '$mapel',
                                alamat = '$alamat',
                                email = '$email'
                                WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);
$num = mysqli_affected_rows($connect);


if($num > 0)
{
    echo "Berhasil ubah data <br>";
}
else {
  echo "Gagal ubah data <br>";
}
echo "<a href='read.php'>Lihat data</a>";
?>
