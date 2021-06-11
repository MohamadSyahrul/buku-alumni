<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdiAlumni;
use App\Models\ProfilMahasiswa;
use App\Models\AlbumAlumni;
use Auth;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
            $q->where('role_id', 'mahasiswa');
        }])->get();
            $album = AlbumAlumni::all();
            return view('pages.mahasiswa.profile', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album
]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       ProfilMahasiswa::create([
        'nim' => $request->input('nim'),
        'nama' => $request->input('nama'),
        'tempat_lahir' => $request->input('tempat_lahir'),
        'tanggal_lahir' => $request->input('tanggal_lahir'),
        'jenis_kelamin' => $request->input('jenis_kelamin'),
        'prodi' => $request->input('prodi'),
        'alamat' => $request->input('alamat'),    
        'lama_studi' => $request->input('lama_studi'),    
        'judul_laporan' => $request->input('judul_laporan'),    
        'tahun_lulus' => $request->input('tahun_lulus'),    
        'angkatan' => $request->input('angkatan'),
        'user_id' => Auth::user()->id,
    ]);


 //    MasterKejadianJurnal::create(
 //     $data

 // );

    return redirect('profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
