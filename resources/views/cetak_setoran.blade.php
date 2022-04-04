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
  @endphp
  @foreach ($setoran as $i)
  <tr>
    <td>{{$no++}}</td>
    <td>{{$i->id}}</td>
    <td>{{$i->tanggal}}</td>
    <td>{{$i->jenis_donasi}}</td>
  @endforeach
      </tr>

</table>

</body>
</html>


