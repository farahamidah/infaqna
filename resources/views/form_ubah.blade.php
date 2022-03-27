@extends('dashboard.layouts.main')

@section('container')
<body>
     
    <div class="container mt-5 tambah-data">
    <div class="card">
    <div class="card-header">
    <h3>Edit Data</h3>
    </div>
    <div class="card-body">
    <a href="{{route('infaqmasuk.index')}}" class="btn btn-primary btn-sm mb-3">Kembali</a>
    <form action="{{route('infaqmasuk.update', $infaqmasuk->id)}}" method="POST">
    @csrf
    @method('PUT')
    <ul class="list-group">
    <!-- No <input type="text" name="no" required value="{{$infaqmasuk->no}}">    -->
    Keterangan <input class="mt-1" type="text" name="keterangan" required value="{{$infaqmasuk->keterangan}}">
    Tanggal <input class="mt-1" type="date" name="tanggal" required value="{{$infaqmasuk->tanggal}}">
    Jumlah <input class="mt-1" type="text" name="jumlah" required value="{{$infaqmasuk->jumlah}}">
    <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
    </ul>
    </form>
    </div>
    </div>
    </div>
    
    <script src="/js/slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js//popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="/js/min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
@endsection