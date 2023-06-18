<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelDataKonsultasi extends Model
{
    use HasFactory;
    protected $table = 'datas';
    protected $fillable = [
        'nama',
        'no_hp',
        'status',
        'deskripsi',
    ];
}
