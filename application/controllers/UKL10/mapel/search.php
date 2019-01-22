<?php

session_start();

if(!(isset($_SESSION['t_user'])))
{
    header("location: ../login/form-login.php");
}
include '../connect.php';

$cari = $_GET['cari'];
$kategori = $_GET['kategori'];

$query = "SELECT kode_mapel, t_guru.mapel, t_guru.Jurusan,t_guru.Kelas, alokasi_waktu, semester, nama_guru
          FROM t_mapel LEFT JOIN t_guru
          USING (kode_guru)
          WHERE $kategori LIKE '%$cari%'
          ORDER BY $kategori";

$result = mysqli_query($connect, $query);

$num = mysqli_num_rows($result);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="read.css">
  </head>
  <body>
    <h1>Data Matapelajaran</h1>
    <div class="container">
      <div class="sidebar">
        <img class="icon" src="admin-icon.png" alt="">
        <ul>
          <li><a class="selected" href="../guru/read.php">Guru</a></li>
          <li><a class="select" href="../mapel/read.php">Matapelajaran</a></li>
          <li><a href="../mapel/form-create.php">Tambah Data</a></li>
          <li><a href="../login/logout.php">Logout</a></li>
        </ul>
      </div>
      <div id="cari">
      <form action="search.php" class="search" method="get">
          <input type="search" name="cari" placeholder="Masukkan pencarian...">
          <input type="submit" value="Cari">
      <select name="kategori" id="kategori">
        <option value="kode_mapel">Kode Mapel</option>
        <option value="mapel">Mapel</option>
        <option value="Jurusan">Jurusan</option>
        <option value="Kelas">Kelas</option>
        <option value="nama_guru">Nama Guru</option>
        <option value="alokasi_waktu">alokasi_waktu</option>
        <option value="semester">Semester</option>
      </select>
    </form>
    </div>
    <div class="content">
    <table border="1">
      <tr>
        <th>No.</th>
        <th>Kode Mapel</th>
        <th>Mapel</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Alokasi Waktu</th>
        <th>Semester</th>
        <th>Nama guru</th>
        <th>Aksi</th>
      </tr>

      <?php
        if($num > 0)
        {
          $no = 1;
          while  ($data = mysqli_fetch_assoc($result)){ ?>
            <tr>
              <td> <?php echo $no; ?> </td>
              <td> <?php echo $data['kode_mapel'] ?></td>
              <td> <?php echo $data['mapel'] ?></td>
              <td> <?php echo $data['Jurusan'] ?></td>
              <td> <?php echo $data['Kelas'] ?></td>
              <td> <?php echo $data['alokasi_waktu'] ?></td>
              <td> <?php echo $data['semester'] ?></td>
              <td>
                <?php
                  if($data['nama_guru'] != NULL)
                  { echo $data['nama_guru'];}
                  else { echo"-";}
                  ?>
                </td>
                <td><a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel'];?>"> Edit | </a>
                    <a href="delete.php?kode_mapel=<?php echo $data['kode_mapel'];?>" onclick="return confirm('Anda yakin ingin menghapus data?')"> Hapus </a>
                </td>
              </tr>
              <?php
              $no++ ;
            }
          }
          else{
            echo "<tr> <td colspan='7'> Tidak ada data </td></tr>";
          }
              ?>
              </table>
  </body>
</html>
