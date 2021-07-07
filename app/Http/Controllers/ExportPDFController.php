<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilMahasiswa;
use App\Models\AlbumAlumni;
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
    }])->where('angkatan', $id)->limit(3)->get();
       // dd($Pm);
       $album = AlbumAlumni::where('hapus', 0)->where('angkatan', $id)->first();
 // return PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif','isRemoteEnabled' => true,'isHtml5ParserEnabled' => true])->loadView('pages.akademik.cetak_album', [
 //            // "prodi"=> ProdiAlumni::all(),
 //        "mahasiswa" => $Pm,
 //            // "album" => $album
 //    ])->stream();

      // $pdf = PDF::loadView('pages.akademik.cetak_album', [
            // "prodi"=> ProdiAlumni::all(),
        // "mahasiswa" => $Pm,
            // "album" => $album
    // ])->setPaper('a4', 'potrait')->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif'])->setBasePath();
    // 'isRemoteEnabled' => true]);
     // 'isHtml5ParserEnabled' => true]);
// ini_set('max_execution_time', 300); //300 seconds = 5 minutes 


// return $pdf->stream('Album Angkatan/'.$id.'.pdf');
        $pdf = PDF::loadView('pages.akademik.cetak_album',
[
            // "prodi"=> ProdiAlumni::all(),
        "mahasiswa" => $Pm,
            "album" => $album
]);
        // ->setOptions(['cover', View::make('pages.akademik.cetak_cover_album', $album)]);
// share data to view
       // view()->share(['mahasiswa',$Pm , 'album' , $album]);
       // $pdf = PDF::loadView('pages.akademik.cetak_album', [$Pm , $album]);

      // download PDF file with download method
      // return $pdf->download('Album Angkatan/'.$id.'.pdf');
        // $pdf->setOption('cover', View::make('pages.akademik.cetak_album', $album));
       return $pdf->download('Album Angkatan/'.$id.'.pdf');

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
