<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('container')
   <h1>Halaman About</h1>
   <h3>{{ $name }}</h3>
   <p>{{ $email }}</p>
   <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
@endsection

<?php

    if(isset($_POST['tambah'])){
        include_once('koneksi.php');

        $no = $_POST['no'];
        $kode = $_POST['kode'];
        $tanggal = $_POST['tanggal'];
        $keterangan = $_POST['keterangan'];
        $jumlah = $_POST['jumlah'];
       

        $simpan = mysqli_query($connect, "INSERT INTO rekapitulasi VALUES ('$no','$kode','$tanggal','$keterangan','$jumlah')");
          
         

            if($simpan==true){
		
                echo "<script>alert('Alhamdulillah Data anda sudah masuk....!!!');history.go(-1);</script>";
                
            }else{
                
                echo "<script>alert('Astagfirullah Data anda belum masuk nih....!!!');history.go(-1);</script>";
                
            }
         
        }else{	
 
    }
?>

$infaqmasuk = InfaqMasuk::all();
        $infaqKeluar = InfaqKeluar::all();
        return view('rekapitulasi-data', ['rekapitulasidata' => $rekapitulasiData,
        'infaqmasuk' => $infaqmasuk,
        'infaqKeluar' => $infaqKeluar,
        ]);

        