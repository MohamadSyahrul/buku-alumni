<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilMahasiswa;
use PDF;
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
    }])->where('angkatan', $id)->get();
       // dd($Pm);
       

      $pdf = PDF::loadView('pages.akademik.cetak_album', [
            // "prodi"=> ProdiAlumni::all(),
        "mahasiswa" => $Pm,
            // "album" => $album
    ])->setPaper('a4', 'potrait')->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif', 'images' => true]);
    // 'isRemoteEnabled' => true]);
     // 'isHtml5ParserEnabled' => true]);
// ini_set('max_execution_time', 300); //300 seconds = 5 minutes 


return $pdf->stream('Album Angkatan/'.$id.'.pdf');
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
