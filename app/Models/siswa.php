<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class siswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='siswa';
    protected $fillable = [
        'nama',
        'id_kelas'
    ];

    protected $hidden = [];
}
