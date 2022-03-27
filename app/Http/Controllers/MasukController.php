<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InfaqMasuk;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\RekapitulasiData;
class MasukController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function index()
       {

            $infaqmasuk=InfaqMasuk::paginate(10);
            $infaqmasukall=InfaqMasuk::all();
            $rekapitulasiData=RekapitulasiData::paginate(10);
            Return view ('infaq-masuk',[
                'infaqmasuk'=>$infaqmasuk, 
                'infaqmasukall'=>$infaqmasukall,
                "title" => "Infaq Masuk"
            ]);
       }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_tambah', [
            "title" => "Tambah Data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $idGen = IdGenerator::generate(['table' => 'infaqmasuk', 'length' => 5, 'prefix' => date('1')]);
        InfaqMasuk::create([
            'id' => $idGen,
            // 'kode_masuk' => $request->kode_infaq,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah
        ]);
        RekapitulasiData::create([
            'id' => $idGen,
            // 'kode_infaq' => $request->kode_infaq,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'masuk' => $request->jumlah
        ]);
        return redirect()->route('infaqmasuk.index')->with('succes', 'Data Berhasil di Input');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infaqmasuk=InfaqMasuk::where('id',$id)->first();
        return view('detailinfaq',['infaqmasuk'=>$infaqmasuk]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infaqmasuk=InfaqMasuk::find($id);
        return view('form_ubah',[
            'infaqmasuk'=>$infaqmasuk,
            "title" => "Edit Data"
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $infaqmasuk=InfaqMasuk::find($id);
        $infaqmasuk->keterangan=$request->keterangan;
        $infaqmasuk->tanggal=$request->tanggal;
        $infaqmasuk->jumlah=$request->jumlah;
        $infaqmasuk->save();

        $rekapitulasiData=RekapitulasiData::find($id);
        $rekapitulasiData->keterangan=$request->keterangan;
        $rekapitulasiData->tanggal=$request->tanggal;
        $rekapitulasiData->masuk=$request->jumlah;
        $rekapitulasiData->save();
        return redirect()->route('infaqmasuk.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infaqmasuk= InfaqMasuk::find($id);
        $infaqmasuk->delete();
        $rekapitulasiData= RekapitulasiData::find($id);
        $rekapitulasiData->delete();
        return redirect()->route('infaqmasuk.index');
    }
}
