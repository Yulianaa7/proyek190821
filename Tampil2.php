<?php
// menangkap data nama dengan method get
$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$ttl = $_POST['ttl'];
$hobi = $_POST['hobi'];
$cita = $_POST['cita'];
$usia = $_POST['usia'];
$asalsekol = $_POST['asalsekol'];
// menampilkan data nama
echo "Nama : " . $nama;
echo "<br> Jenis kelamin : " .$jenis;
echo "<br> Agama : " .$agama;
echo "<br> Alamat : " .$alamat;
echo "<br> Tempat tanggal lahir : " .$ttl;
echo "<br> Hobi : " .$hobi;
echo "<br> Cita cita : " .$cita;
echo "<br> Usia : " .$usia;
echo "<br> Asal Sekolah : " .$asalsekol;
?>