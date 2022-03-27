<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1 style="text-align:center">Laporan Rekapitulasi Data Infaq</h1>

<table id="customers">
  <tr>
    <th>No</th>
    <th>Id</th>
    <th>Tanggal</th>
    <th>Keterangan</th>
    <th>Masuk</th>
    <th>Jenis</th>
    <th>Keluar</th>
  </tr>
  @php
            $no=1;
            $total_masuk = 0;
            $total_keluar = 0;
            $saldo = 0;
  @endphp
  @foreach ($rekapitulasidata as $i)
  <?php
            if ($i->masuk !== 0) {
              $jenis = 'masuk';
            }else{
              $jenis = 'keluar';
            }
            ?>
  <tr>
    <td>{{$no++}}</td>
    <td>{{$i->id}}</td>
    <td>{{$i->tanggal}}</td>
    <td>{{$i->keterangan}}</td>
    <td>{{$i->masuk}}</td>
    <td>{{$jenis}}</td>
    <td>{{$i->keluar}}</td>
    <?php
               $total_masuk += $i->masuk;
               $total_keluar += $i->keluar;
              ?>
        </tr>
  @endforeach
  <tr>
      <th colspan="4">Total Infaq Masuk</th>
      <th>{{ $total_masuk }}</th>
      <th colspan="2"></th>
  </tr>
  <tr>
      <th colspan="6">Total Infaq Keluar</th>
      <th>{{ $total_keluar }}</th>
  </tr>
  <tr>
      <th colspan="5">Total Saldo</th>
      <th colspan="2">
          <?php
          $saldo = $total_masuk - $total_keluar;
          echo $saldo;
          ?>
      </th>
      </tr>

</table>

</body>
</html>


