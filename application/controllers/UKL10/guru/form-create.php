<?php

session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: read.php");
}

include '../connect.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form-create.css">
  </head>
  <body>
    <div class="form">
    <h1>Tambah data Guru</h1>
    <table>
    <div class="tabel">
      <div class="form">
        <form class="form-create" action="create.php" method="post">
          <input type="text" name="nama_guru" placeholder="Nama Guru"/>
          <input type="number" name="jumlah_jam" value="" placeholder="Jumlah Jam"/>
          <input type="text" name="Jurusan" placeholder="Jurusan" value=""/>
          <input type="text" name="Kelas" placeholder="Kelas" value=""/>
          <input type="text" name="mapel" placeholder="Mapel" value=""/>
            <input type="text" name="alamat" value="" placeholder="Alamat"/>
              <input type="text" name="telp" value="" placeholder="No.Telp"/>
                <input type="text" name="email" value="" placeholder="Email"/>
          <button type="submit" name="btnSimpan" value="Simpan">Simpan</button>
        </form>
      </div>
    </div>
    </table>
    </div>
  </body>
</html>
