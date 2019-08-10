<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pasien;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = Pasien::all();
        return view('pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien = Pasien::all();
        return view('pasien.create', compact('pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new Pasien();
        $pasien->no_pasien = $request->no_pasien;
        $pasien->nm_pasien = $request->nm_pasien;
        $pasien->jk = $request->jk;
        $pasien->agama = $request->agama;
        $pasien->alamat = $request->alamat;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->usia = $request->usia;
        $pasien->no_tlp = $request->no_tlp;
        $pasien->nm_kk = $request->nm_kk;
        $pasien->hub_kel = $request->hub_kel;
        $pasien->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = Pasien::findOrFail($id);
        return view('pasien.edit', compact('pasien'));
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
        $pasien = Pasien::findOrFail($id);
        $pasien->no_pasien = $request->no_pasien;
        $pasien->nm_pasien = $request->nm_pasien;
        $pasien->jk = $request->jk;
        $pasien->agama = $request->agama;
        $pasien->alamat = $request->alamat;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->usia = $request->usia;
        $pasien->no_tlp = $request->no_tlp;
        $pasien->nm_kk = $request->nm_kk;
        $pasien->hub_kel = $request->hub_kel;
        $pasien->save();

        return redirect()->route('pasien.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->delete();
        return redirect()->route('pasien.index');
    }
}
