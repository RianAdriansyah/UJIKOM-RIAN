<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kunjungan;

class KunjunganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kjn = Kunjungan::all();
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
        return view('kunjungan.create', compact('kjn'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('kunjungan.show', compact('kjn'));
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
        return view('kunjungan.edit', compact('kjn'));
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
        //
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
