<?php
include("koneksi.php");
?>
<html>
<head>
    <title>INPUT KARYAWAN</title>
    <script>
     function hitung() {
        interval = setInterval("tunjangann()", 1);
    }
    function tunjangann() {
       var gaji = document.frmkaryawan.GajiPokok.value;
       var tun = document.frmkaryawan.Tunjangan.value;

       document.frmkaryawan.TotalGaji.value = parseInt(gaji)+parseInt(tun);
   }
   function stopCalc() {
       clearInterval(interval);
   }
</script>
<center>
 <table width="473" border="1" >
     <tr>
         <td width="567"><div align="left">
             <p class="judulutama">
                 <center>INPUT DATA KARYAWAN</center></p>
                 <p class="judulkedua">
                     <center>PT.IDNA</center></p>
                     <hr>
                     <form enctype="multipart/form-data" method="post" action="prosestambah.php" name="frmkaryawan" id="frmkaryawan">
                       <table width="400" border="0" align="left" id="biodata">
                           <tr>
                            <td width="350">KODE GAJI</td>
                            <td width="305"><input name="KdGaji" id="xKdGaji" type="text" size="35" 
                                maxlength="30"/></td>
                            </tr>
                            <tr>
                               <td width="350">NAMA KARYAWAN</td>
                               <td width="305"><input name="Nama" id="xNama" type="text" size="35" 
                                maxlength="30"/></td>
                            </tr>
                            <tr>
                               <td width="350">GAJI POKOK</td>
                               <td width="305"><input name="GajiPokok" id="xGajiPokok" type="text" 
                                size="35" maxlength="30"/></td>
                            </tr>
                            <tr>
                               <td width="350">TUNJANGAN</td>
                               <td width="305"><input name="Tunjangan" id="xTunjangan" 
                                type="text" size="35" maxlength="30" onfocus="hitung();" /></td>
                            </tr>
                            <tr>
                               <td width="350">TOTAL GAJI</td>
                               <td width="305"><input name="TotalGaji" id="xTotalGaji" type="text" 
                                size="35" maxlength="30" /></td>
                            </tr>
                            <tr>
                               <td></td>
                               <td>
                                   <input type="submit" name="Submit" value=" SIMPAN " />
                                   <input type="reset" name="batal" value=" BATAL "/>
                                   <input type="button" name="keluar" value=" KELUAR " onClick="location.href=('index.php')"/>

                               </td>
                           </tr>
                       </table>
                   </form>
               </div></td>
           </tr>
       </table>
   </center>
</div> 
</body>
</html>