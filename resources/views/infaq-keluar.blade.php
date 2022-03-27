@extends('dashboard.layouts.main')
@section('container')
<?php
   $total=0;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Data Infaq Keluar</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>

    <div class="content">
      <div class="card card-info card-outline">
        <div class="card-header">
          <div class="card-tools">
              
          <a href=" {{route('infaqkeluar.create')}}" class="btn btn-success">Tambah Data</a> 
         
          </div>
        </div>
          
        <body>
        <div class="card-body">
        <table class="table table-bordered">          
            <tr>
              <th>No</th> 
              <th>Kode</th>
              <th>Tanggal</th>
              <th>Waktu Dibuat</th>
              <th>Keterangan</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            </tr> 
            <?php
            $no=1;
            ?>   
            @foreach($infaqkeluar as $index => $i)
            <tr>
              <td>{{ $index+ $infaqkeluar->firstItem() }}</td>
              <td>{{$i->id}}</td>
              <td>{{$i->tanggal}}</td>
              <td>{{$i->created_at}}</td>
              <td>{{$i->keterangan}}</td>
              <td>{{$i->jumlah}}</td>
              <td>
              <ul class="nav">
              <!-- <a href="{{route('infaqkeluar.show', $i->id)}}" class="btn btn-warning btn-sm mr-2">Show</a>-->
              <a href="{{route('infaqkeluar.edit', $i->id)}}" class="btn btn-warning btn-sm me-3">Edit</a>
              <form action="{{route('infaqkeluar.destroy', $i->id)}}" method="POST">
            @csrf
            @method('DELETE')
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form>
              </ul>
              </td>
              </tr>
           @endforeach
           @foreach($infaqkeluarall as $j)
              <?php
                $total+=$j->jumlah; 
              ?>
            @endforeach
           <tr>
                <th colspan="4">Total Infaq Keluar</th>
                <th><?= $total?></th>
              </tr>
            </table>
            <div class="pull-right">
                  {{ $infaqkeluar->links()}}
            </div>
              <!--<div class="card-body">
                  <a href="{{'/dashboard'}}" class="btn btn-link">Back</a>
                  <form action="" method="POST">
              </div>-->
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

   <script src="/js/slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="/js/min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  
</body>

@endsection


