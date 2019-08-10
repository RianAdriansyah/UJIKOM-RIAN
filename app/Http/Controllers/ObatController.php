<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $obat = Obat::all();
        return view('obat.create', compact('obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obat = new Obat();
        $obat->kd_obat = $request->kd_obat;
        $obat->nm_obat = $request->nm_obat;
        $obat->jml_obat = $request->jml_obat;
        $obat->harga = $request->harga;
        $obat->ukuran = $request->ukuran;
        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.show', compact('obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
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
        $obat = Obat::findOrFail($id);
        $obat->kd_obat = $request->kd_obat;
        $obat->nm_obat = $request->nm_obat;
        $obat->jml_obat = $request->jml_obat;
        $obat->harga = $request->harga;
        $obat->ukuran = $request->ukuran;
        $obat->save();

        return redirect()->route('obat.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);
        $obat->kd_obat;
        $obat->nm_obat;
        $obat->jml_obat;
        $obat->harga;
        $obat->ukuran;
        $obat->delete();
        return redirect()->route('obat.index');
    }
}
