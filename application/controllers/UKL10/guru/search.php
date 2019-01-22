<?php

session_start();

if(!(isset($_SESSION['t_user'])))
{
    header("location: ../login/form-login.php");
}

include '../connect.php';
$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT * FROM t_guru WHERE $kategori LIKE '%$cari%'
          ORDER BY $kategori";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="search.css">
  </head>
  <body>
    <h1>Data Guru</h1>
    <div class="container">
      <div class="sidebar">
        <img class="icon" src="admin-icon.png" alt="">
        <ul>
          <li><a class="selected" href="../guru/read.php">Guru</a></li>
          <li><a href="../mapel/read.php">Matapelajaran</a></li>
          <li><a href="../guru/form-create.php">Tambah Data</a></li>
          <li><a href="../login/logout.php">Logout</a></li>
        </ul>
      </div>
      <div id="cari">
      <form action="search.php" class="search" method="get">
          <input type="search" name="cari" placeholder="Masukkan pencarian...">
          <input type="submit" value="Cari">
      <select name="kategori" id="kategori">
          <option value="nama_guru">Nama Guru</option>
          <option value="alamat">Alamat</option>
          <option value="Jurusan">Jurusan</option>
          <option value="Kelas">Kelas</option>
          <option value="mapel">Mapel</option>
          <option value="jumlah_jam">Jumlah Jam</option>
          <option value="telp">No.Telp</option>
          <option value="email">email</option>
          </select>
      </form>
      </div>
      <div class="content">
    <table border="1">
          <tr>
            <th>No.</th>
            <th>Nama Guru</th>
            <th>Jumlah jam</th>
            <th>Jurusan</th>
            <th>Kelas</th>
            <th>Mapel</th>
            <th>Alamat</th>
            <th>telp</th>
            <th>Email</th>
            <th colspan="2">Aksi</th>
          </tr>
          <?php
          if($num > 0)
          {
              $no = 1;
              while($data = mysqli_fetch_assoc($result))
              {
                  echo "<tr>";
                  echo "<td>" . $no ."</td>";
                  echo "<td>" . $data['nama_guru'] . "</td>";
                  echo "<td>" . $data['jumlah_jam'] . "</td>";
                  echo "<td>" . $data['Jurusan'] . "</td>";
                  echo "<td>" . $data['Kelas'] . "</td>";
                  echo "<td>" . $data['mapel'] . "</td>";
                  echo "<td>" . $data['alamat'] . "</td>";
                  echo "<td>" . $data['telp'] . "</td>";
                  echo "<td>" . $data['email'] . "</td>";
                  echo "<td><a href='form-update.php?kode_guru=" . $data['kode_guru'] ."'>Edit </a>";
                  echo "<td><a href='delete.php?kode_guru=" . $data['kode_guru'] . "'' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                  echo "</tr>";
                  $no++;
              }
          }
          else
          {
            echo "<td colspan='3'>Tidak ada data</td>";
          }
        ?>
    </table>
  </div>
</div>

  </body>
</html>
