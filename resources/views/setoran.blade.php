@extends('dashboard.layouts.main')
@section('container')
<body>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Bukti Setoran</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
           
  <div class="content">
    <div class="card card-info card-outline">
    <div class="card-header">
          <div class="card-tools">
            <a href=" {{ route('setoran.create') }}" class="btn btn-success">Tambah Penyetor</a>
          </div>
    </div>
      
        <div class="card-body">
          <table class="table table-bordered">          
            <tr>
              <th>No</th> 
              <th>Nama Penyetor</th>
              <th>Tanggal</th>
              <th>Jenis Donasi</th>
              <th>Total Setoran</th>
              <th>Aksi</th>
            </tr>  
            <?php
            $no = 1;
            $total_all = 0;
            function rupiah($uang) {
              $hasil_rupiah = "Rp " . number_format($uang,0,',','.');
              return $hasil_rupiah;
            }
            ?>  
            @foreach($setoran as $index => $i)

            <tr>
              <td>{{ $index + $setoran->firstItem() }}</td>
              <td>{{ $i->nama }}</td>
              <td>{{ $i->tanggal }}</td>
              <td>{{ $i->jenis_donasi }}</td>
              <td>{{ rupiah($i->total_setoran) }}</td>
              <td><a href="{{route('setoran.print', $i->id)}}" target="_blank" class="btn btn-warning">Cetak</a></td>

              
              </tr>
           @endforeach
          </table>
            <div class="pull-right">
                  {{ $setoran->links()}}
            </div>
          </div>
        </div>
      </div>
       <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <div class="content mt-3">
                <div class="card card-info card-outline">
                    <div class="card-header">
                       <div class="card-tools">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2022 Unit Usaha Unida
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
    </div>
  </div>
            

   <script src="/js/slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="/js/smin.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
</body>

@endsection