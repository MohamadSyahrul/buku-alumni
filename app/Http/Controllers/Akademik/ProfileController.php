<?php

namespace App\Http\Controllers\Akademik;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id',Auth::user()->id)->first(); 
        return view('pages.akademik.change-password',compact('user')); 
    }
    public function updateUser(Request $request){
          
        $user = User::where('id',Auth::user()->id)->update([
            'name' => $request->name_edit,
            'email' =>  $request->email_edit,
            'password' => Hash::make( $request->password,),
            // 'role_id' => 'mahasiswa'
        ]);   

        return redirect('/profile');

    }
}
