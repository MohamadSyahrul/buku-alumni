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
        if (Auth::user()->role_id=="akademik") {
           $Pm =  ProfilMahasiswa::where('user_id', Auth::user()->id)->get();

            $album = AlbumAlumni::all();
            // dd($Pm);

            return view('pages.mahasiswa.profile', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album
]);
        }
        else{
        $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
            $q->where('role_id', 'mahasiswa');
        }])->where('user_id', Auth::user()->id)->get();

            $album = AlbumAlumni::all();
            return view('pages.mahasiswa.profile', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album
]);
        }
       
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

        $file = $request->file('foto');
        $filename = $request->input('nim').'-'.$request->input('nama').'-'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        $file->move('Foto-Mahasiswa/', $file_formatted);

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
        'telepon' => $request->input('telepon'),
        'foto' => $file_formatted,
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
        $file = $request->file('foto');
        $filename = $request->input('nim').'-'.$request->input('nama').'-'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        $file->move('Foto-Mahasiswa/', $file_formatted);

       ProfilMahasiswa::where('id', $id)->update([
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
        'telepon' => $request->input('telepon'),
        'foto' => $file_formatted,
        'user_id' => Auth::user()->id,
         ]);


 //    MasterKejadianJurnal::create(
 //     $data

 // );

    return redirect('profile');
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
