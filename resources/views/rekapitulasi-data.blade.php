@extends('dashboard.layouts.main')
@section('container')
<body>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h3>Rekapitulasi Data</h3>
    <div class="btn-toolbar mb-2 mb-md-0">
    </div>
</div>
           
  <div class="content">
    <div class="card card-info card-outline">
    <div class="card-header">
          <div class="card-tools">
            <a href="/dashboard/rekapitulasidata-pdf" target="_blank" class="btn btn-warning">Print PDF</a>
          </div>
    </div>
      
        <div class="card-body">
        <table class="table table-bordered">          
            <tr>
              <th>No</th> 
              <th>Kode</th>
              <th>Tanggal</th>
              <th>Waktu</th>
              <th>Keterangan</th>
              <th>Masuk</th>
              <th>Jenis</th>
              <th>Keluar</th>
            </tr>  
            <?php
            $no = 1;
            $total_masuk = 0;
            $total_keluar = 0;
            $saldo = 0;
            ?>  
            @foreach($rekapitulasidata as $index => $i)
            <?php
            if ($i->masuk !== 0) {
              $jenis = 'masuk';
            }else{
              $jenis = 'keluar';
            }
            ?>
            <tr>
              <td>{{ $index + $rekapitulasidata->firstItem() }}</td>
              <td>{{$i->id}}</td>
              <td>{{$i->tanggal}}</td>
              <td>{{$i->created_at}}</td>
              <td>{{$i->keterangan}}</td>
              <td>{{$i->masuk}}</td>
              <td>{{$jenis}}</td>
              <td>{{$i->keluar}}</td>

              
              </tr>
           @endforeach
           @foreach($rekapitulasidataall as $j)
            <?php
               $total_masuk += $j->masuk;
               $total_keluar += $j->keluar;
              ?>
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
             <th colspan="1">
             <?php
             $saldo = $total_masuk - $total_keluar;
             echo $saldo;
             ?>
             </th>
             
           </tr>
           <!--<div class="card-footer">
            {{ $rekapitulasidata->links()}}
            </div>-->
            </table>
            <div class="pull-right">
                  {{ $rekapitulasidata->links()}}
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