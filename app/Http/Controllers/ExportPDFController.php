<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilMahasiswa;
use App\Models\AlbumAlumni;
use App\Models\ProdiAlumni;
use PDF;
use View;
class ExportPDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    { 

       $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
        $q->where('role_id', 'mahasiswa');
    }])->where('angkatan', $id)->limit(25)->get();
       $album = AlbumAlumni::where('hapus', 0)->where('angkatan', $id)->first();
       $prodi = ProdiAlumni::where('hapus', 0)->get();

        $pdf = PDF::loadView('pages.akademik.cetak_album',
[
        "mahasiswa" => $Pm,
            "album" => $album,
            "prodi" => $prodi
]);
      
        set_time_limit(300);

       return $pdf->stream('Album Angkatan/'.$id.'.pdf');
//         return view('pages.akademik.cetak_album',
// [
//         "mahasiswa" => $Pm,
//             "album" => $album,
//             "prodi" => $prodi
// ]);

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
        //
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
