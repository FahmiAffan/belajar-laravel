<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $guru = Guru::all();
        return response()->json([
            "msg" => "Success",
            "data" => "$guru",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $request->validate([
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        $guru = Guru::create($request->all());
        return response()->json([
            "msg" => "Data Berhasil Di Buat",
            "data" => "$guru"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
        return response()->json([
            "msg" => "data berhasil ditampilkan",
            "data" => "$guru"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit(Guru $guru)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guru $guru , $id)
    {
        //
        $request->validate([
            'nama_guru' => 'required',
            'mata_pelajaran' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        $guru = Guru::find($id)->update($request->all());

        return response()->json([
            "msg" => "Berhasil Update",
            "data" => "$guru"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guru $guru,$id)
    {
        //
        $guru = Guru::find($id)->delete();
        return response()->json([
            "data" => $guru,
            "id" => $id,
            "msg" => "Data berhasil di hapus"
        ]);
    }
}
