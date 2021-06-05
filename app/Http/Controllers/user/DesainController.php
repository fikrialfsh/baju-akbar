<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\desainsendiri;
use Illuminate\Http\Request;

class DesainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.desain');
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('listGambar')){
            $listGambar = $request->file('listGambar');
            foreach ($listGambar as $gambar) {
                $nama_file = time()."_".$gambar->getClientOriginalName();
                $tujuan_upload = 'uploads';
                $gambar -> move($tujuan_upload,$nama_file);
                $data[]=$nama_file;
            }
            desainsendiri::create([
                'tipe_kaos' => $request->tipe_kaos,
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'jumlah' => $request->jumlah,
                'description' => $request->description,
                'gambardesain'          => json_encode($data),
            ]);
        }
        return redirect()->route('upload.desain')->with('status','Berhasil Menambah Produk Baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
