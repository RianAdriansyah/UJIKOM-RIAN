<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tindakan;
use App\Obat;
use App\Pasien;
use App\RekamMedis;
use Illuminate\Support\Facades\Auth;

class RekammedisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rm = RekamMedis::with('tindakan', 'obat', 'pasien')->get();
        return view('rekammedis.index', compact('rm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rm = RekamMedis::all();
        $pasien = Pasien::all();
        $obat = Obat::all();
        $tdk = Tindakan::all();
        
        return view('rekammedis.create', compact('rm', 'pasien', 'obat', 'tdk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rm = new RekamMedis;
        $rm->no_rm = $request->no_rm;
        $rm->tindakan_id = $request->tindakan_id;
        $rm->obat_id = $request->obat_id;
        $rm->user_id = Auth::user()->id;
        $rm->pasien_id = $request->pasien_id;
        $rm->diagnosa = $request->diagnosa;
        $rm->resep = $request->resep;
        $rm->keluhan = $request->keluhan;
        $rm->tgl_pemeriksaan = $request->tgl_pemeriksaan;
        $rm->ket = $request->ket;
        $rm->save();

        return redirect()->route('rekammedis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pasien = Pasien::all();
        $obat = Obat::all();
        $tdk = Tindakan::all();
        
        return view('rekammedis.show', compact('rm', 'pasien', 'obat', 'tdk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $pasien = Pasien::all();
        $obat = Obat::all();
        $tdk = Tindakan::all();
        
        return view('rekammedis.edit', compact('rm', 'pasien', 'obat', 'tdk'));
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
        $rm = RekamMedis::findOrFail($id);
        $rm->no_rm = $request->no_rm;
        $rm->tindakan_id = $request->tindakan_id;
        $rm->obat_id = $request->obat_id;
        $rm->user_id = Auth::user()->id;
        $rm->pasien_id = $request->pasien_id;
        $rm->diagnosa = $request->diagnosa;
        $rm->resep = $request->resep;
        $rm->keluhan = $request->keluhan;
        $rm->tgl_pemeriksaan = $request->tgl_pemeriksaan;
        $rm->ket = $request->ket;
        $rm->save();

        return redirect()->route('rekammedis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rm = RekamMedis::findOrFail($id);
        $rm->delete();

        return redirect()->route('rekammedis.index');
    }
}
