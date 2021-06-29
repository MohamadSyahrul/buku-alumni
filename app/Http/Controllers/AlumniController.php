<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilMahasiswa;
use App\Models\ValidasiStatusMahasiswa;
use Auth;
class AlumniController extends Controller
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
       
         return view('pages.alumni', [
            // "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            // "validate" => $validate
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
         ProfilMahasiswa::where('id', $id)->update([
        'status' => 'Tervalidasi',
    ]);
        // Belum Tervalidasi
    return redirect('alumni');

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
