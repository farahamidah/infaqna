<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\InfaqKeluar;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use App\Models\RekapitulasiData;
class KeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $infaqkeluar=InfaqKeluar::paginate(10);
        $infaqkeluarall=InfaqKeluar::all();
        $rekapitulasiData=RekapitulasiData::paginate(10);
        Return view ('infaq-keluar',[
            'infaqkeluar'=>$infaqkeluar, 
            'infaqkeluarall'=>$infaqkeluarall,
            "title" => "Infaq Keluar"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_keluar', [
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
        $idGen = IdGenerator::generate(['table' => 'infaqkeluar', 'length' => 5, 'prefix' => date('2')]);
        InfaqKeluar::create([
            'id' => $idGen,
            // 'kode_keluar' => $request->kode_infaq,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah
        ]);
        RekapitulasiData::create([
            'id' => $idGen,
            // 'kode_infaq' => $request->kode_infaq,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'keluar' => $request->jumlah
        ]);
        return redirect()->route('infaqkeluar.index')->with('succes', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $infaqkeluar=InfaqKeluar::where('id',$id)->first();
        return view('detailkeluar',['infaqkeluar'=>$infaqkeluar]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $infaqkeluar=InfaqKeluar::find($id);
        return view('ubah_keluar',[
            'infaqkeluar'=>$infaqkeluar,
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
        $infaqkeluar=InfaqKeluar::find($id);
        $infaqkeluar->keterangan=$request->keterangan;
        $infaqkeluar->tanggal=$request->tanggal;
        $infaqkeluar->jumlah=$request->jumlah;
        $infaqkeluar->save();

        $rekapitulasiData=RekapitulasiData::find($id);
        $rekapitulasiData->keterangan=$request->keterangan;
        $rekapitulasiData->tanggal=$request->tanggal;
        $rekapitulasiData->keluar=$request->jumlah;
        $rekapitulasiData->save();
        return redirect()->route('infaqkeluar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $infaqkeluar= InfaqKeluar::find($id);
        $infaqkeluar->delete();
        $rekapitulasiData= RekapitulasiData::find($id);
        $rekapitulasiData->delete();
        return redirect()->route('infaqkeluar.index');
    }
}
