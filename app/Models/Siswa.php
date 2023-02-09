<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';

    protected $guarded = ['id_kelas'];

    public function kelas(){
        return $this->hasOne(kelas::class, 'id_kelas' , 'id_kelas');
    }
}
