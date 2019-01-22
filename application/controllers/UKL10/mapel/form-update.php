<?php
session_start();

if (!(isset($_GET['kode_mapel'])))
{
  header("location: read.php");
}

include '../connect.php';

$kode_mapel = $_GET['kode_mapel'];

$query = "SELECT kode_mapel, alokasi_waktu, semester, t_mapel.kode_guru, nama_guru
          FROM t_mapel LEFT JOIN t_guru USING(kode_guru)
          WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect, $query);

$data_guru = mysqli_fetch_assoc($result);

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
        <h1>Ubah Data Matapelajaran</h1>
        <table>
          <div class="tabel">
            <div class="form">
        <form action="update.php" method="post">
          <input type="text" id="kode" name="kode_mapel" value="<?php echo $data_guru['kode_mapel']; ?>" placeholder="Kode Mapel" readonly>
          <input type="number"id="alokasi_waktu" name="alokasi_waktu" value="<?php echo $data_guru['alokasi_waktu']; ?>" placeholder="Alokasi Waktu">
          <input type="number" id="semester" name="semester" value="<?php echo $data_guru['semester']; ?>" placeholder="Semester">
          <button type="submit" name="btnSimpan" value="Simpan">Simpan</button>
        <label for="">Guru Pengajar  :</label>
        <select name="kode_guru" id="nama_guru" placeholder="Guru Pengajar">
        <option value="-">Tidak ada pengajar</option>
        <?php
        $query2 = "SELECT kode_guru, nama_guru FROM t_guru";
        $result2 = mysqli_query($connect, $query2);
        while ($data = mysqli_fetch_assoc($result2)){
            ?>
          <option value="<?php echo $data['kode_guru']; ?>"<?php if($data_guru['kode_guru'] == $data['kode_guru']){echo "selected";} ?>>
            <?php echo $data['nama_guru']; ?>
          </option>
          <?php
          }
        ?>
        </select>

        </form>
        </div>
      </table>
    </div>
  </body>
</html>
