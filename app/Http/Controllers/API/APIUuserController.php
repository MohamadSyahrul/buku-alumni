<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\User;
use App\Models\ProfilMahasiswa;
use Illuminate\Support\Facades\Hash;

class APIUuserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $client = new Client();
        $response = $client->request('GET', 'https://jpc.poliwangi.ac.id/Api/Alumni/list/', ['verify' => false]);
        $response = json_decode($response->getBody());
        set_time_limit(600);
        // foreach ($response->data as $provinsi) {
        //    User::insert([
        //         'id' => $provinsi->id,
        //         'name' => $provinsi->nama,
        //         'nim' => $provinsi->nim,
        //         'password' =>  Hash::make($provinsi->nim),
        //         'email' => $provinsi->email,
        //         'role_id' => 'mahasiswa',
        //     ]);
        //     ProfilMahasiswa::insert([

        //         'nim' => $provinsi->nim,
        //          'user_id' => $provinsi->id,
        //         'nama' => $provinsi->nama,
        //         'prodi' => $provinsi->prodi,
        //         'angkatan' => $provinsi->tahun_lulus,
        //         'telepon' => $provinsi->telp,
        //     ]);
        // }
        dd($response->data);
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
