@extends('dashboard.layouts.main')

@section('container')
    <div class="container d-flex justify-content-center">
    <div class="card w-50">
    <div class="card-header">
    <h3>DETAIL REKAPITULASI</h3>
    </div>
    <div class="card-body">
    <a href="{{route('rekapitulasidata.index')}}" class="btn btn-primary btn-sm">Kembali</a>
    <div class="row ml-2">
    <h4 class="col-4">No</h4>
    <h4>:{{$rekapitulasidata->no}}</h4>
    </div>
    <div class="row ml-2">
    <h4 class="col-4">Kode</h4>
    <h4>:{{$rekapitulasidata->kode_infaq}}</h4>
    </div>
    <div class="row ml-2">
    <h4 class="col-4">Keterangan</h4>
    <h4>:{{$rekapitulasidata->keterangan}}</h4>
    </div>
    <div class="row ml-2">
    <h4 class="col-4">Tanggal</h4>
    <h4>:{{$rekapitulasidata->tanggal}}</h4>
    </div>
    <div class="row ml-2">
    <h4 class="col-4">Jumlah</h4>
    <h4>:{{$rekapitulasidata->jumlah}}</h4>
    </div>
    
    </div>
    </div>
    </div>
     <script src="/js/slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="/js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   <script src="/js/min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection