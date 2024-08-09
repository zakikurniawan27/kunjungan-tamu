<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Tamu::get();

        return view('tamu.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tamu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama'=>'required',
            'nik'=>'required',
            'alamat'=>'required'
        ]);

        $data = new Tamu([
            'nama'=>$request->nama,
            'nik'=>$request->nik,
            'alamat'=>$request->alamat
        ]);

        $data->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dataTamu = Tamu::find($id);
        $data = Tamu::join('kunjungans', 'tamus.id', '=', 'kunjungans.tamu_id')->join('keperluans', 'kunjungans.id', '=', 'keperluans.kunjungan_id')->where('tamus.id', '=', $id)->get();


        return view('keperluan.indexKeperluan', compact('dataTamu','data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
