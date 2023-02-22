<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siswa = Siswa::get()->join('kelas', 'siswa.id_kelas', '=', 'kelas.id');
        // dd($siswa);
        // return view('siswa.index' , array(
        //     'siswa' => $siswa
        // ));
        return response()->json($siswa);
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
        $siswa = Siswa::create([
            "nama_siswa" => $request->nama_siswa,
            "jurusan" => $request->jurusan,
            "jenis_kelamin" => $request->jenis_kelamin,
            "alamat" => $request->alamat,
            "id_kelas" => $request->id_kelas,
        ]);
        return response()->json([
            "msg" => "Data Berhasil Di Buat",
            "data"=> "$siswa",
        ]);
        // dd($siswa);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Siswa $siswa, $id)
    {
        //
        $siswa = Siswa::find($id)->update([
            'nama_siswa' => $request->nama_siswa,
            'jurusan' => $request->jurusan,
            'id_kelas' => $request->id_kelas,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat
        ]);

        return response()->json([
            "msg" => "data berhasil di update",
            "data" => "$siswa"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Siswa $siswa, $id)
    {
        //
        $siswa = Siswa::find($id)->delete();
        return response()->json([
            "msg" => "data berhasil di hapus",
            "data" => "$siswa",
            "id" => "$id"
        ]);
    }
}
