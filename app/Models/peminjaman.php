<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\kelas;

class peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';

    protected $guarded = ['id'];
}
