<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kelas extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ='kelas';
    protected $fillable = [
        'nama',
        'id_kelas'
    ];

    protected $hidden = [];
}
