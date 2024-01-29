<title>Data Karyawan</title>
<?php
include("koneksi.php");
$sql_view = mysql_query("SELECT * FROM Karyawan ORDER BY KdGaji ASC");
$total = mysql_num_rows($sql_view);
echo"<br><br>
<center><font size=+2>DATA KARYAWAN</font></center>
<center><font size=+2>PT.IDNA</font><br><br></center>
<center>
<table width='700' border='1' align='center' class='tengahbiodata'>"
?>
<input type="button" name="tambah" value=" TAMBAH DATA "onClick="location.href=('tambah.php')"/><?php
echo"<tr>
<th width='100'scope='col'>KODE GAJI</th>
<th width='200'scope='col'>NAMA</th>
<th width='100'scope='col'>GAJI POKOK</th>
<th width='100'scope='col'>TUNJANGAN</th>
<th width='100'scope='col'>TOTAL GAJI</th>
</tr>";
while ($data = mysql_fetch_array($sql_view)) {
   echo "<tr>";
   echo "<td>$data[KdGaji] </td>";
   echo "<td>$data[Nama] </td>";
   echo "<td>$data[GajiPokok] </td>";
   echo "<td>$data[Tunjangan]</td>";
   echo "<td>$data[TotalGaji]</td>";
   echo"<td><a href = edit.php?kode=$data[KdGaji]> Edit</a> |
   <a href=hapus.php?kode=$data[KdGaji] >Hapus</a></td></tr></td>";
}
echo "</table>";
print("Jumlah Data : $total")
?>