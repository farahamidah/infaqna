@extends('dashboard.layouts.main')

@section('container')
<div class="card">
  <div class="card-header">
    <div class="pull-left">
      <h4>Detail Infaq Keluar</h4>
    </div>
    
  </div>
  <div class="card-body table-responsive">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <table class="table table-bordered">
          <tbody>
            <tr>
              <th style="width:30%">No</th>
              <td>{{$infaqkeluar->no}}</td>
            </tr>
            <tr>
              <th>Kode</th>
              <td>{{$infaqkeluar->kode_infaq}}</td>
            </tr>
            <tr>
              <th>Keterangan</th>
              <td>{{$infaqkeluar->keterangan}}</td>
            </tr>
            <tr>
              <th>Jumlah</th>
              <td>{{$infaqkeluar->jumlah}}</td>
            </tr>
            <tr>
              <th>Tanggal</th>
              <td>{{$infaqkeluar->tanggal}}</td>
            </tr>
          </tbody>
        </table>
        <div class="pull-right">
          <a href="{{route('infaqmasuk.index')}}" class="btn btn-secondary btn-sm">
            <i class="fa fa-plus"></i> Back
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection