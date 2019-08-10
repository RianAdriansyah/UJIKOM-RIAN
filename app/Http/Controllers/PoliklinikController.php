<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poliklinik;

class PoliklinikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $poli = Poliklinik::all();
        return view('index', compact('poli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $poli = Poliklinik::all();
        return view('poliklinik.create', compact('poli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $poli = new Poliklinik();
        $poli->kd_poli = $request->kd_poli;
        $poli->nm_poli = $request->nm_poli;
        $poli->lantai = $request->lantai;
        $poli->save();
        return redirect()->route('poliklinik.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poli = Poliklinik::findOrFail($id);
        return view('poliklinik.show', compact('poli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poli = Poliklinik::findOrFail($id);
        return view('poliklinik.edit', compact('poli'));
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
        $poli = Poliklinik::findOrFail($id);
        $poli->kd_poli = $request->kd_poli;
        $poli->nm_poli = $request->nm_poli;
        $poli->lantai = $request->lantai;
        $poli->save();
        return redirect()->route('poliklinik.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poli = Poliklinik::findOrFail($id);
        $poli->delete();
        return redirect()->route('poliklinik.index');
    }
}
