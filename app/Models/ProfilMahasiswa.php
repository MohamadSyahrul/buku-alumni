<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ValidasiStatusMahasiswa;

class ProfilMahasiswa extends Model
{
    use HasFactory;
    // protected $table = 'menus';
    protected $fillable = [
        'id',
        'nim',
        'nama',
        'name', 
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'prodi',
        'alamat',
        'lama_studi',
        'judul_laporan',
        'sosmed',
        'angkatan',
        'tahun_lulus',
        'telepon',
        'ipk',
        'foto',
        'pekerjaan',
        'user_id',
        'created_at',
        'updated_at',
    ];
    public function user_detail() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
