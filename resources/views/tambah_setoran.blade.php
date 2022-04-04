@extends('dashboard.layouts.main')

@section('container')
<body>
     
    <div class="container mt-5 tambah-data">
      <div class="card">
        <div class="card-header">
          <h4>Tambah Setoran</h4>
        </div>
        <div class="card-body">
          <a href="{{route('setoran.index')}}" class="btn btn-primary btn-sm mb-3">Kembali</a>
          <form action="{{route('setoran.store')}}" method="POST">
            @csrf
            <ul class="list-group">
            <!-- No <input type="text" name="no" required>    -->
            Nama Penyetor
            <input class="form-control mt-1" type="text" name="nama" placeholder="Nama Anda" required>
            Tanggal
            <input class=" form-control mt-1" type="text" name="tanggal" placeholder="Tanggal" onfocus="(this.type='date')" onblur="(this.type='text')" required>
            Jenis Donasi
            <select class="form-control mt-1" name="jenis_donasi">
              <option selected>Choose...</option>
              <option>Zakat</option>
              <option>Infaq</option>
              <option>Sedekah</option>
            </select>
            Total Setoran
            <input class="form-control mt-1" type="text" name="total" placeholder="total" required>

            <input type="submit" value="Simpan Data" class="btn btn-success mt-3">
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