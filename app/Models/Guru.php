<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "gurus";
    protected $connection = "mysql";

    // protected $fillable = [
    //     "nama_guru",
    //     "mata_pelajaran",
    //     "jenis_kelamin"
    // ];
    protected $guarded = ['id'];
}

