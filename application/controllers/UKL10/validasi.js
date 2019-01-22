function validasiSekolah(){

  var kode_mapel = document.getElementById('kode_mapel');
  var mapel = document.getElementById('mapel');
  var alokasi_waktu = document.getElementById('alokasi_waktu');
  var semester = document.getElementById('semester');
  var nama_guru = document.getElementById('nama_guru');
  var kode_guru = document.getElementById('kode_guru');

  if (kode_mapel.value == "")
  {
    alert("Anda belum mengisi kode Matapelajaran");
    kode_mapel.focus();
    return false;
  }

  else if (mapel.value == "")
  {
    alert("Anda belum mengisi Matapelajaran");
    mapel.focus();
    return false;
  }

  else if (alokasi_waktu.value == "")
  {
    alert("Anda belum mengisi Alokasi Waktu ");
    alokasi_waktu.focus();
    return false;
  }

  else if (semester.value == "")
  {
    alert("Anda belum mengisi Semester");
    semester.focus();
    return false;
  }

  else if (kode_guru.value == "-")
  {
    alert("Anda belum mengisi Guru Pengajar");
    kode_guru.focus();
    return false;
  }

  else
  {
    return true;
  }

}
