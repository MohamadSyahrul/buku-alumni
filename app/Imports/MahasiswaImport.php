<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;

class MahasiswaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
          return new User([
           // 'id'     => $row[0],
           'name'     => $row[0],
           'email'    => $row[1], 
           'password' => Hash::make($row[2]),
           'role_id' => 'mahasiswa',
        ]);
    }
}
