<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestingController extends Controller
{
    //
    public function getdata(){
        $test = DB::table('buku')->get();
        return response()->json($test);
    }
}
