<?php

namespace App\Http\Controllers;

use App\Lab;
use App\Obat;
use App\RekamMedis;
use Illuminate\Http\Request;

class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = Lab::with('obat', 'rekam_medis')->get();
        return view('lab.index', compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lab = Lab::all();
        $obat = Obat::all();
        $rm = RekamMedis::all();

        return view('lab.create', compact('lab', 'rm', 'obat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lab = new Lab;
        $lab->obat_id = $request->obat_id;
        $lab->rm_id = $request->rm_id;
        $lab->hasil_lab = $request->hasil_lab;
        $lab->ket = $request->ket;
        $lab->save();

        return redirect()->route('lab.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lab = Lab::findOrFail($id);
        $obat = Obat::all();
        $rm = RekamMedis::all();

        return view('lab.show', compact('lab', 'rm', 'obat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab = Lab::findOrFail($id);
        $obat = Obat::all();
        $rm = RekamMedis::all();

        return view('lab.edit', compact('lab', 'rm', 'obat'));
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
        $lab = Lab::findOrFail($id);
        $lab->obat_id = $request->obat_id;
        $lab->rm_id = $request->rm_id;
        $lab->hasil_lab = $request->hasil_lab;
        $lab->ket = $request->ket;
        $lab->save();

        return redirect()->route('lab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lab = Lab::findOrFail($id);
        $lab->delete();

        return redirect()->route('lab.index');
    }
}
