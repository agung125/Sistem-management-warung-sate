<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Bahan;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BahanBakuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bahans = Bahan::all();

        // return $bahans;
        return view('admin.bahanbaku.index',compact('bahans'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'satuan' => 'required',
            'harga_persatuan' => 'required|numeric',
            'tanggal_kadaluarsa' => 'required|date',
            'qty' => 'required|numeric'
        ]);

        Bahan::create($request->all());

        return redirect()->route('admin.bahanbaku.index')
                         ->with('success', 'Bahan Berhasil Di Tambahkan..!!');

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
