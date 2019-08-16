<?php

namespace App\Http\Controllers;

use App\Dokter;
use App\Kunjungan;
use App\Poliklinik;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokter = Dokter::with('poliklinik', 'kunjungan')->get();
        return view('dokter.index', compact('dokter'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dokter = Dokter::all();
        $poli = Poliklinik::all();
        $kjn = Kunjungan::all();

        return view('dokter.create', compact('dokter', 'poli', 'kjn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokter = new Dokter;
        $dokter->kd_dokter = $request->kd_dokter;
        $dokter->poli_id = $request->poli_id;
        $dokter->kunjungan_id = $request->kunjungan_id;
        $dokter->user_id = Auth::user()->id;
        $dokter->nm_dokter = $request->nm_dokter;
        $dokter->sip = $request->sip;
        $dokter->tempat_lahir = $request->tempat_lahir;
        $dokter->no_tlp = $request->no_tlp;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->route('dokter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dokter = Dokter::findOrFail($id);
        $poli = Poliklinik::all();
        $kjn = Kunjungan::all();

        return view('dokter.show', compact('dokter', 'poli', 'kjn'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dokter = Dokter::findOrFail($id);
        $poli = Poliklinik::all();
        $kjn = Kunjungan::all();

        return view('dokter.edit', compact('dokter', 'poli', 'kjn'));
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
        $dokter = Dokter::findOrFail($id);
        $dokter->kd_dokter = $request->kd_dokter;
        $dokter->poli_id = $request->poli_id;
        $dokter->kunjungan_id = $request->kunjungan_id;
        $dokter->user_id = Auth::user()->id;
        $dokter->nm_dokter = $request->nm_dokter;
        $dokter->sip = $request->sip;
        $dokter->tempat_lahir = $request->tempat_lahir;
        $dokter->no_tlp = $request->no_tlp;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->route('dokter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $odkter = Dokter::findOrFail($id);
        $dokter->delete();
        return redirect()->route('dokter.index');
    }
}
