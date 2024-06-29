<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;
use App\Models\Kunjungan;
use App\Models\Keperluan;

class KeperluanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexKeperluan()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id)
    {
        $data = Tamu::join('kunjungans', 'tamus.id', '=', 'kunjungans.tamu_id')->join('keperluans', 'kunjungans.id', '=', 'keperluans.kunjungan_id')->where('tamus.id', '=', $id)->get();


        return view('keperluan.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeKeperluan(Request $request)
    {

        $validas = $request->validate([
            'keperluan'=> 'required'
        ]);

        $validas['kunjungan_id'] = kunjungans()->id();

        Keperluan::create($validas);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
