<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdiAlumni;
use App\Models\ProfilMahasiswa;
use App\Models\AlbumAlumni;
use App\Models\User;
use Auth;
use Image;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
//         if (Auth::user()->role_id=="akademik") {
//            $Pm =  ProfilMahasiswa::where('user_id', Auth::user()->id)->get();

//             $album = AlbumAlumni::all();
//             // dd($Pm);

//             return view('pages.mahasiswa.profile', [
//             "prodi"=> ProdiAlumni::all(),
//             "mahasiswa" => $Pm,
//             "album" => $album
// ]);
//         }
//         else{
        $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
            $q->where('role_id', 'mahasiswa');
        }])->where('user_id', Auth::user()->id)->get();
        $data_user = User::where('id',Auth::user()->id)->first();
        // dd($Pm);
            $album = AlbumAlumni::all();
            return view('pages.mahasiswa.profile', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album,
            "data_user" => $data_user
]);
        // }
       
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
        $filename = $request->input('nim').'-'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        // $file->move('Foto-Mahasiswa/', $file_formatted);


        $img = Image::make($request->file('foto')->getRealPath());
        // $img = Image::make('Foto-Mahasiswa/', $file_formatted);

        // resize image to fixed size
        // See the docs - http://image.intervention.io/api/resize
        $img->resize(300, 200);
        $img->response('jpg');
        // The below part is optional, this is if uploads "belongTo" a "User"
        // so you automatically insert the relation, if you don't need it, just
        // remove it.
        $img->save('Foto-Mahasiswa/'. $file_formatted ,80);

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
        'sosmed' => $request->input('sosmed'),        
        'angkatan' => $request->input('angkatan'),
        'telepon' => $request->input('telepon'),
        'ipk' => $request->input('ipk'),
        'foto' => $file_formatted,
        'pekerjaan' => $request->input('pekerjaan'),
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
    public function show(Request $request, $id)
    {
         $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
            $q->where('role_id', 'mahasiswa');
        }])->where('id', $id)->get();
        $data_user = User::where('id',Auth::user()->id)->first();
        // dd($Pm);
            $album = AlbumAlumni::all();
            return view('pages.mahasiswa.profile', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album,
            "data_user" => $data_user
]);
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
        $filename = $request->input('nim').'-'.$file->getClientOriginalName();
        $file_formatted = str_replace(' ', '_', $filename);
        // $file->move('Foto-Mahasiswa/', $file_formatted);


        $img = Image::make($request->file('foto')->getRealPath());
        // $img = Image::make('Foto-Mahasiswa/', $file_formatted);

        // resize image to fixed size
        // See the docs - http://image.intervention.io/api/resize
        $img->resize(300, 200);
        $img->response('jpg');
        // The below part is optional, this is if uploads "belongTo" a "User"
        // so you automatically insert the relation, if you don't need it, just
        // remove it.
        $img->save('Foto-Mahasiswa/'. $file_formatted ,80);

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
        'sosmed' => $request->input('sosmed'),    
        'angkatan' => $request->input('angkatan'),
        'telepon' => $request->input('telepon'),
        'ipk' => $request->input('ipk'),
        'foto' => $file_formatted,
        'pekerjaan' => $request->input('pekerjaan'),
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
