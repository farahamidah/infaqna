<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setoran;
use Haruncpi\LaravelIdGenerator\IdGenerator;
class SetoranController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    Public function index()
       {

            $setoran=Setoran::paginate(10);
            $setoranall=Setoran::all();
            Return view ('setoran',[
                'setoran'=>$setoran, 
                'setoranall'=>$setoranall,
                "title" => "Setoran"
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
            "title" => "Tambah Setoran"
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
        $idGen = IdGenerator::generate(['table' => 'setoran', 'length' => 5, 'prefix' => date('1')]);
        Setoran::create([
            'id' => $idGen,
            // 'kode_masuk' => $request->kode_infaq,
            'keterangan' => $request->keterangan,
            'tanggal' => $request->tanggal,
            'jumlah' => $request->jumlah
        ]);
        return redirect()->route('setoran.index')->with('succes', 'Data Berhasil di Input');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $setoran=Setoran::where('id',$id)->first();
        // return view('detailinfaq',['infaqmasuk'=>$infaqmasuk]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setoran=Setoran::find($id);
        return view('form_ubah',[
            'setoran'=>$setoran,
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
        $setoran=Setoran::find($id);
        $setoran->keterangan=$request->keterangan;
        $setoran->tanggal=$request->tanggal;
        $setoran->jumlah=$request->jumlah;
        $setoran->save();
        return redirect()->route('setoran.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setoran=Setoran::find($id);
        $setoran->delete();
        return redirect()->route('setoran.index');
    }
}
