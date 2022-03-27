<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RekapitulasiData;
use PDF;

class RekapitulasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekapitulasidata=RekapitulasiData::paginate(10);
        $rekapitulasidataall=RekapitulasiData::all();
        Return view('rekapitulasi-data', [
            'rekapitulasidata'=>$rekapitulasidata,
            'rekapitulasidataall'=>$rekapitulasidataall,
            "title" => "Rekapitulasi Data"
        ]);
    }
    public function rekapitulasiPrint()
    {
        $rekapitulasidata=RekapitulasiData::all();
        Return view('rekapitulasidata-pdf', ['rekapitulasidata' =>$rekapitulasidata]);
        view()->share('rekapitulasidata', $rekapitulasidata);
        $pdf = PDF::loadview('rekapitulasidata-pdf');

        return $pdf->download('rekapitulasidata.pdf');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah_rekapitulasi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RekapitulasiData::create([
            'no'=> $request->no,  
            'kode_infaq'=> $request->kode_infaq,
            'keterangan'=> $request->keterangan,        
            'tanggal'=> $request->tanggal,
            'jumlah'=> $request->jumlah
        ]);
        return redirect()->route('rekapitulasidata.index')->with('succes', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rekapitulasidata=RekapitulasiData::where('id',$id)->first();
        return view('detailrekapitulasi',['rekapitulasidata'=>$rekapitulasidata]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekapitulasidata=RekapitulasiData::find($id);
        return view('ubah_rekapitulasi',['rekapitulasidata'=>$rekapitulasidata]);
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
        $rekapitulasidata=RekapitulasiData::find($id);
        $rekapitulasidata->no=$request->no;
        $rekapitulasidata->kode_infaq=$request->kode_infaq;
        $rekapitulasidata->keterangan=$request->keterangan;
        $rekapitulasidata->tanggal=$request->tanggal;
        $rekapitulasidata->jumlah=$request->jumlah;
        $rekapitulasidata->save();
        return redirect()->route('rekapitulasidata.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rekapitulasidata=RekapitulasiData::find($id);
        $rekapitulasidata->delete();
        return redirect()->route('rekapitulasidata.index');
    }

    
}
