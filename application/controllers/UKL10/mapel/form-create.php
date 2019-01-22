<?php
session_start();

if (!(isset($_SESSION['t_user'])))
{
  header("location: read.php");
}

include '../connect.php';

$query = "SELECT kode_guru, nama_guru FROM t_guru";
$result = mysqli_query($connect, $query);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- <script src="../validasi.js"></script> -->
    <title></title>
    <link rel="stylesheet" href="form-create.css">
  </head>
  <body>
        <div class="form">
        <h1>Tambah Data Matapelajaran</h1>
        <table>
          <div class="tabel">
            <div class="form">
        <form class="form-create" action="create.php" method="post">
          <input type="text" id="kode" name="kode_mapel" value="" placeholder="Kode Mapel">
          <input type="number"id="sks" name="alokasi_waktu" value=""placeholder="Alokasi Waktu">
          <input type="number" id="semester" name="semester" value=""placeholder="Semester">
        <label for="">Guru Pengajar  :</label>
        <select name="kode_guru" id="kode_guru" placeholder="Guru Pengajar">
        <option value="-">--Pilih salah satu--</option>
        <option value="NULL">Tidak ada pengajar</option>

        <?php
          while ($data = mysqli_fetch_assoc($result)){
            ?>
          <option value="<?php echo $data['kode_guru']; ?>">
            <?php echo $data['nama_guru']; ?>
          </option>
          <?php
          }
        ?>
        </select>
    <button type="submit" class="button "name="btnSimpan" value="Simpan">Simpan</button>
        </form>

        </div>
      </table>
    </div>
  </body>
</html>
