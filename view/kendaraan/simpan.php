<?php 
include '../../config/koneksi.php';
$id_parkir = $_POST['plat_nomer'];
$alamat = $_POST['jenis_kendaraan'];
$harga = $_POST['id_parkir'];

$query = mysqli_query($conn,"INSERT INTO kendaraan VALUES('$id_parkir','$alamat','$harga')
");

echo "<script>alert('data berhasil di simpan'); window.location.href='index.php';
</script>";
?>