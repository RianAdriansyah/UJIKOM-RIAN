<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tindakan;

class TindakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdk = Tindakan::all();
        return view('tindakan.index', compact('tdk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tdk = Tindakan::findOrFail($id);
        return view('tindakan.create', compact('tdk'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tdk = new Tindakan();
        $tdk->kd_tindakan = $request->kd_tindakan;
        $tdk->nm_tindakan = $request->nm_tindakan;
        $tdk->ket = $request->ket;
        $tdk->save();

        return redirect()->route('tindakan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tdk = Tindakan::findOrFail($id);
        return view('tindakan.show', compact('tdk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tdk = Tindakan::findOrFail($id);
        return view('tindakan.edit', compact('tdk'));
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
        $tdk = Tindakan::findOrFail($id);
        $tdk->kd_tindakan = $request->kd_tindakan;
        $tdk->nm_tindakan = $request->nm_tindakan;
        $tdk->ket = $request->ket;
        $tdk->save();

        return redirect()->route('tindakan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tdk = Tindakan::findOrFail($id);
        $tdk->delete();

        return redirect()->route('tindakan.index');
    }
}
