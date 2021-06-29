<?php

namespace App\Http\Controllers\Akademik;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlbumAlumni;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('pages.akademik.album', [
        "album" => AlbumAlumni::where('hapus', 0)->get()
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
        $file = $request->file('gambar_album');
        $filename = time().'.'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        $file->move('Akademik-Album/', $file_formatted);

        AlbumAlumni::create([
            'nama_album' => $request->input('nama_album'),
            'angkatan' => $request->input('angkatan'),
            'tahun_terbit' => $request->input('tahun_terbit'),
            'gambar_album' => $file_formatted,
        ]);
        return redirect('album-akademik');

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
       return view('pages.akademik.edit_album', [
        "album" => AlbumAlumni::where('id',$id)->first()
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
      $file = $request->file('gambar_album');
      $filename = time().'.'.$file->getClientOriginalName();
      $file_formatted = str_replace(' ', '_', $filename);
      $file->move('Akademik-Album/', $file_formatted);

      AlbumAlumni::where('id', $id)->update([
        'nama_album' => $request->input('nama_album'),
        'angkatan' => $request->input('angkatan'),
        'tahun_terbit' => $request->input('tahun_terbit'),
        'gambar_album' => $file_formatted,
    ]);
      return redirect('album-akademik');
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        AlbumAlumni::where('id', $id)->update([
            'hapus' => 1,
        ]);
          return redirect('album-akademik');
    }
}
