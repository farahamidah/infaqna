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
  /* padding-top: 12px;
  padding-bottom: 12px; */
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
  width: 5%;
}
.td3{
  width: 45%;
}
.td4{
  width: 25%;
}
</style>
</head>
<body>

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
    <td colspan="2"></td>
  </tr>
  <tr>
    <td>Total Setoran</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td>Untuk Setoran</td>
    <td>:</td>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Mantingan, 4 April 2022</td>
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
  <!-- @php
            $no=1;  
  @endphp
  @foreach ($setoran as $i)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$i->id}}</td>
    <td>{{$i->tanggal}}</td>
    <td>{{$i->jenis_donasi}}</td>
  @endforeach
      </tr> -->

</table>

</body>
</html>


