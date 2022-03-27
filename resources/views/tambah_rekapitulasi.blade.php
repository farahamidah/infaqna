@extends('dashboard.layouts.main')

@section('container')
<body>
     
    <div class="container">
    <div class="card">
    <div class="card-header">
    <h3>TAMBAH DATA</h3>
    </div>
    <div class="card-body">
    <a href="{{route('rekapitulasidata.index')}}" class="btn btn-primary btn-sm">Kembali</a>
    <form action="{{route('rekapitulasidata.store')}}" method="POST">
    @csrf
    <ul class="list-group">
    No <input type="text" name="no" required>   
    Kode <input type="text" name="kode_infaq" required>
    Keterangan <input type="text" name="keterangan" required>
    Tanggal <input type="date" name="tanggal" required>
    Jumlah <input type="text" name="jumlah" required>
    <input type="submit" value="Simpan Data" class="btn btn-success">
    </ul>
    </form>
    </div>
    </div>
    </div>
    
    <script src="/js/slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="/js/min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
@endsection