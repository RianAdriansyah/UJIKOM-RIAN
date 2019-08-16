<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kunjungan;
use App\Pasien;
use App\Poliklinik;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kjn = Kunjungan::with('pasien', 'poliklinik')->get();
        return view('kunjungan.index', compact('kjn'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kjn = Kunjungan::all();
        $pasien = Pasien::all();
        $poli = Poliklinik::all();

        return view('kunjungan.create', compact('kjn', 'pasien', 'poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kjn = new Kunjungan();
        $kjn->tgl_kunjungan = $request->tgl_kunjungan;
        $kjn->pasien_id = $request->pasien_id;
        $kjn->poli_id = $request->poli_id;
        $kjn->jam_kunjungan = $request->jam_kunjungan;
        $kjn->save();

        return redirect()->route('kunjungan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kjn = Kunjungan::findOrFail($id);
        $pasien = Pasien::all();
        $poli = Poliklinik::all();
        return view('kunjungan.show', compact('kjn', 'pasien', 'poli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kjn = Kunjungan::findOrFail($id);
        $pasien = Pasien::all();
        $poli = Poliklinik::all();
        return view('kunjungan.edit', compact('kjn', 'pasien', 'poli'));
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
        $kjn = Kunjungan::findOrFail($id);
        $kjn->tgl_kunjungan = $request->tgl_kunjungan;
        $kjn->pasien_id = $request->pasien_id;
        $kjn->poli_id = $request->poli_id;
        $kjn->jam_kunjungan = $request->jam_kunjungan;
        $kjn->save();

        return redirect()->route('kunjungan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kjn = Kunjungan::findOrFail($id);
        $kjn->delete();
        return redirect()->route('kunjungan.index');
    }
}
