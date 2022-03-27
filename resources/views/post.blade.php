@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>

    <a href="/blog">Back To Posts></a>
@endsection

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="text-center">HALAMAN UTAMA</h2>
      </div>
 <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150.000</h3>

                <h6>Total Infaq Masuk</h6>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>50.000<sup style="font-size: 20px"></sup></h3>

                <h6>Total Infaq Keluar</h6>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>100.000</h3>

                <h6>Saldo Akhir</h6>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>


<div class="card">
  <div class="card-header">
    <div class="pull-left">
      <strong>Detail Infaq Masuk</strong>
    </div>
    <div class="pull-right">
      <a href="{{route('infaqmasuk.index')}}" class="btn btn-default btn-sm">
        <i class="fa fa-plus"></i> Back
      </a>
    </div>
  </div>
  <div class="card-body table-responsive">
    <div class="row">
      <div class="col-md-8 offset-md-2">

        <table class="table table-borderes">
          <tbody>
            <tr>
              <th>No</th>
              <td>{{$infaqmasuk->no}}</td>
            </tr>
            <tr>
              <th>Kode</th>
              <td>{{$infaqmasuk->kode_infaq}}</td>
            </tr>
            <tr>
              <th>Keterangan</th>
              <td></td>
            </tr>
            <tr>
              <th>Tanggal</th>
              <td></td>
            </tr>
            <tr>
              <th>Jumlah</th>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>