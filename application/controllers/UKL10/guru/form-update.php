<?php
session_start();
if (!(isset($_GET['kode_guru'])))
{
  header("location: read.php");
}
include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = " SELECT * FROM t_guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form-update.css">
  </head>
  <body>
    <div class="form">
    <h1>Ubah data Guru</h1>
    <table>
    <div class="tabel">
      <div class="form">
        <form class="form-update" action="update.php" method="post">
          <input type="text" name="nama_guru" id="" placeholder="Nama Guru" value="<?php echo $row['nama_guru'];?>"/>
          <input type="number" name="jumlah_jam" placeholder="Jumlah Jam" value="<?php echo $row['jumlah_jam'];?>"/>
          <input type="text" name="Jurusan" placeholder="Jurusan" value="<?php echo $row['Jurusan'];?>"/>
          <input type="text" name="Kelas" placeholder="Kelas" value="<?php echo $row['Kelas'];?>"/>
          <input type="text" name="mapel" placeholder="Mapel" value="<?php echo $row['mapel'];?>"/>
          <input type="text" name="alamat" placeholder="Alamat" value="<?php echo $row['alamat'];?>"/>
          <input type="text" name="telp" placeholder="No.Telp"  value="<?php echo $row['telp'];?>"/>
          <input type="text" name="email" placeholder="Email" value="<?php echo $row['email'];?>"/>
          <input type="hidden" name="kode_guru" value="<?php echo $row['kode_guru'];?>"/>
          <button type="submit" name="btnSimpan" value="Simpan">Simpan</button>
        </form>
      </div>
    </div>
    </table>
    </div>
  </body>
</html>
