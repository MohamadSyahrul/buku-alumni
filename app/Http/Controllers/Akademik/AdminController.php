<?php

namespace App\Http\Controllers\Akademik;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pm = User::where('role_id','akademik')->where('hapus',0)->get();
        return view('pages.akademik.user_admin', [
           "admin" => $Pm,
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
        $data = $request->all();

       
        $user = User::create([
            'name' => $data['name'],
            'nim' => $data['nim'],
            'password' => Hash::make($data['password']),
            'role_id' => 'akademik'
        ]);   

        return redirect('user-Admin');
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
        return view('pages.akademik.edit_user_admin', [
            "admin" => User::where('id',$id)->first()
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
        $data = $request->all();

       
        $user = User::where('id',$id)->update([
            'name' => $data['name'],
            'nim' => $data['nim'],
            'password' => Hash::make($data['password']),
            'role_id' => 'akademik'
            
            // 'role_id' => 'mahasiswa'
        ]);   

        return redirect('user-Admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id', $id)->update([
            'hapus' => 1,
        ]);
          return redirect('user-Admin');
    }
}
