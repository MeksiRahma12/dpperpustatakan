<?php
include("koneksi.php");
$KdGaji = $_POST['KdGaji'];
$Nama = $_POST['Nama'];
$GajiPokok = $_POST['GajiPokok'];
$Tunjangan = $_POST['Tunjangan'];
$TotalGaji = $_POST['TotalGaji'];
$sql_tambah_karyawan = "INSERT INTO Karyawan
VALUES('$KdGaji','$Nama','$GajiPokok','$Tunjangan','$TotalGaji')";
$tambahkaryawan = mysql_query($sql_tambah_karyawan);
if ($tambahkaryawan) {
    header("location:index.php?");
} else {
   echo "Gagal Tambah Barang";
}