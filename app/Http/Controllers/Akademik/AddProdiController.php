<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdiAlumni;

class AddProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.akademik.prodi', [
        "prodi" => ProdiAlumni::where('hapus', 0)->get()
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
       ProdiAlumni::create([
            'nama_prodi' => $request->input('nama_prodi'),
            'grade' => $request->input('grade'),
            // 'gambar_album' => $file_formatted,
        ]);
        return redirect('prodi');
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
         return view('pages.akademik.edit_prodi', [
        "prodi" => ProdiAlumni::where('id',$id)->first()
    ]);
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
         ProdiAlumni::where('id',$id)->update([
            'nama_prodi' => $request->input('nama_prodi'),
            'grade' => $request->input('grade'),
            // 'gambar_album' => $file_formatted,
        ]);
        return redirect('prodi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProdiAlumni::where('id', $id)->update([
            'hapus' => 1,
        ]);
          return redirect('prodi');
    }
}
