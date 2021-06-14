<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlbumAlumni extends Model
{
    use HasFactory;
     protected $fillable = [
        'id',
        'nim',
        'nama_album',
        'angkatan', 
        'gambar_album',
        'hapus',
        'created_at',
        'updated_at',
    ];
}
