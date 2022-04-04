<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  width: 100%;
  border: 3px solid #000;
}

#customers td, #customers th {
  
  padding: 8px;
}

#customers th {
  text-align: left;
  color: black;
}
.judul2{
  text-align: center;
  font-weight: bold;
  border: 1px solid #ddd;
  padding: 20px;
}
.td1{
  width: 25%;
}
.td2{
  width: 2%;
}
.td3{
  width: 48%;
}
.td4{
  width: 25%;
}
</style>
</head>
<body>
@method('PUT')
<?php
   function rupiah($uang) {
     $hasil_rupiah = "Rp " . number_format($uang,0,',','.');
     return $hasil_rupiah;
   }
?>
<table id="customers">
  <tr>
    <th colspan="4">KOPERASI MAHASISWA UNIT USAHA UNIDA</th>
  </tr>
  <tr>
    <th colspan="4">Universitas Darussalam Gontor Kampus Putri</th>
  </tr>
  <tr>
    <th colspan="4">Mantingan, Ngawi, Jawa Timur</th>
  </tr>
  <tr>
    <td colspan="4"><hr></td>
  </tr>
  <tr>
    <td></td>
    <td class="judul2" colspan="2">TANDA BUKTI SETORAN</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td>Telah Terima Dari</td>
    <td>:</td>
    <td colspan="2">{{ $setoran->nama }}</td>
  </tr>
  <tr>
    <td>Total Setoran</td>
    <td>:</td>
    <td colspan="2">{{ rupiah($setoran->total_setoran) }}</td>
  </tr>
  <tr>
    <td>Untuk Setoran</td>
    <td>:</td>
    <td colspan="2">{{ $setoran->jenis_donasi }}</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <?php
      $date='2020-02-16';
    ?>
    <td>Mantingan, {{ date("d F Y", strtotime($setoran->tanggal)); }}</td>
  </tr>
  <tr>
    <td><br><br></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>(____________________)</td>
  </tr>
  <tr>
    <td class="td1"></td>
    <td class="td2"></td>
    <td class="td3"></td>
    <td class="td4"></td>
  </tr>

</table>

</body>
</html>



