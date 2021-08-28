<?php

namespace App\Http\Controllers\Akademik;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Image;
use App\Models\AlbumAlumni;
use App\Models\ProdiAlumni;
use App\Models\ProfilMahasiswa;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::user()->id)->first(); 
        return view('pages.akademik.change-password',compact('user')); 
    }
    public function updateUser(Request $request){
          
        $user = User::where('id',Auth::user()->id)->update([
            'name' => $request->name_edit,
            'nim' =>  $request->nim_edit,
            'password' => Hash::make( $request->password,),
            // 'role_id' => 'mahasiswa'
        ]);   

        return redirect('/profile');

    }
    
    public function show(Request $request, $id)
    {        
        $Pm =  ProfilMahasiswa::with(['user_detail' => function($q) use($request) {
            $q->where('role_id', 'mahasiswa');
        }])->where('id', $id)->get();
        $data_user = User::where('id',Auth::user()->id)->first();
        // dd($Pm);
             $album = AlbumAlumni::all();
            return view('pages.akademik.edit_profil_mahasiswa', [
            "prodi"=> ProdiAlumni::all(),
            "mahasiswa" => $Pm,
            "album" => $album,
            "data_user" => $data_user
]);

        
    }
   public function store(Request $request, $id)
    {
        if ($request->file('foto')) {
        
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
        'tahun_lulus' => $request->input('tahun_lulus'),    
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
        }
        else{
            
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
        'tahun_lulus' => $request->input('tahun_lulus'),    
        'angkatan' => $request->input('angkatan'),
        'telepon' => $request->input('telepon'),
        'ipk' => $request->input('ipk'),
        // 'foto' => $file_formatted,
        'pekerjaan' => $request->input('pekerjaan'),
        'user_id' => Auth::user()->id,
         ]);
        }

        return redirect()->back();

    }
    
}
