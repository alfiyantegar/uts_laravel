<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kependudukan extends Model
{
protected $table ='kependudukan';

    protected $fillable=[
        'nik',
        'nama',
        'alamat',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'jenis_kelamin',

    ];
}
