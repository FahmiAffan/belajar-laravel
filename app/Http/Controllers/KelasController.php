<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekelasRequest;
use App\Http\Requests\UpdatekelasRequest;
use App\Models\Kelas;
use Illuminate\Support\Facades\Validator;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Kelas::all();
        return response()->json($data);
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
     * @param  \App\Http\Requests\StorekelasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekelasRequest $request)
    {
        //
        // $validate = Validator::make($request->all(), [
        //     'nama_kelas' => 'required'
        // ]);
        // if($validate){
        //     $data = kelas::create([
        //         'nama_kelas' => $request->nama_kelas
        //     ]);
        //     return response()->json(["msg" => "data berhasil di inputkan" ,"data" => $data]);
        // }else{
        //     return response()->json(["msg"=>"Data Gagal Di iputkan"]);
        // }

        $data = Kelas::create([
            'nama_kelas' => $request->nama_kelas
        ]);
        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekelasRequest  $request
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekelasRequest $request, kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(kelas $kelas)
    {
        //
        $kelas->delete();
        return response()->json("msg" == "Data Kelas Berhasil Di Delete");
    }
}
