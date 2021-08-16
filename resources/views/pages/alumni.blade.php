@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@push('plugin-style')

<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
{{-- @section('content')
<x-app-layout>
  <x-slot name="header">


  <!--   <div class="dropdown mb-2" style="background-color: #fff">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#TambahData">Tambah Album Wisuda</button>

    </div> -->
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            @if($mahasiswa->count() < 1)


            <div class="form-group row" style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
              <p style="font-size: 30px"> BELUM ADA ALUMNI</p>
            </div> 
            @else
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                   <th>No</th>
                   <th>NIM</th>
                   <th style="text-align: center;">Nama Mahasiswa</th>
                   <th>Jurusan</th>
                   <th>Angkatan</th>
                     @if(Auth::user()->role_id=="mahasiswa") 
          <th> IPK </th>   
             @else
                   <!-- <th>IPK</th> -->
                   <th colspan="3" style="text-align: center;">Action</th>
                   @endif
                 </tr>
               </thead>
               <tbody>
                 @foreach($mahasiswa as $key=> $mahasiswa)

                 <tr>

                  <td>{{$key+1}}</td>
<!--    <td><img src="{{ asset('/Akademik-Album/'.$mahasiswa->gambar_album) }}" style=";max-height: 50px;max-width: 50px;"></td> -->
<td>{{$mahasiswa->nim}}</td>
<td>{{$mahasiswa->nama}}</td>
<td>{{$mahasiswa->prodi}}</td>
<td>{{$mahasiswa->angkatan}}</td>
@if(Auth::user()->role_id=="mahasiswa")
<td> {{$mahasiswa->ipk}} </td>
@else
<td>
    <button
        class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-primary"
        style="padding: 1em;margin-right: -1.5em">
        <a href="{{ url('detail-alumni_mahasiswa',$mahasiswa->user_id) }}">
            <i class="fas fa-edit">
                Detail
            </i>
        </a>
    </button>
</td>
<td>
    @if($mahasiswa->status != 'Belum Tervalidasi' && $mahasiswa->user_id == $mahasiswa->user_detail->id)
    <button
        class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-success"
        style="padding-top: 1em;padding-bottom: 1em;padding-right: 2.2em;padding-left: 2.2em;margin-right: -1.5em"
        disabled>
        <i data-feather="check"></i>

    </button>
    @else
    <button
        class="text-red-500 hover:text-red-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-danger"
        style="padding: 1em;margin-right: -1.5em">
        <a href="{{ route('alumni.show',$mahasiswa->id) }}">
            <i class="fas fa-edit">
                Validate
            </i>
        </a>
    </button>

    @endif
</td>
<td>
    <button
        class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-primary"
        style="padding: 1em;">
        <a href="{{ route('profile.show',$mahasiswa->id) }}">
            <i data-feather="edit"></i>
        </a>
    </button>

</td>
@endif
</tr>
@endforeach
@endif
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>

</x-slot>

<script type="text/javascript">
    function editData(id) {
        console.log(id);
    }

    function deleteData(id, event) {
        Swal.fire({
            title: 'Apakah yakin menghapus data ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus aja!'
        }).then((result) => {
            if (result.value) {
                event.submit();

            }
        })
    }
    $(function () {
        $("#date").datepicker({
            dateFormat: 'yy'
        });
    });​

</script>
</x-app-layout>
<script src="https://unpkg.com/axios/dist/axios.min.js')}}"></script>

@endsection --}}

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Basic table -->
        <section id="basic-datatable">
            <!-- Multilingual -->
            <section id="multilingual-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header border-bottom">
                              <h4 class="card-title">
                                Alumni
                              </h4>
                              @if($mahasiswa->count() < 1)
                              <div class="form-group row" style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
                                <p style="font-size: 30px"> BELUM ADA ALUMNI</p>
                              </div> 
                              @else
                            </div>
                            <div class="card-datatable">
                                <table class="dt-multilingual table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <th>Jurusan</th>
                                            <th>Angkatan</th>
                                            @if(Auth::user()->role_id=="mahasiswa")
                                            <th> IPK </th>
                                            @else
                                            <!-- <th>IPK</th> -->
                                            <th colspan="3">Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($mahasiswa as $key=> $mahasiswa)

                                        <tr>

                                            <td>{{$key+1}}</td>
                                            <!--    <td><img src="{{ asset('/Akademik-Album/'.$mahasiswa->gambar_album) }}" style=";max-height: 50px;max-width: 50px;"></td> -->
                                            <td>{{$mahasiswa->nim}}</td>
                                            <td>{{$mahasiswa->nama}}</td>
                                            <td>{{$mahasiswa->prodi}}</td>
                                            <td>{{$mahasiswa->angkatan}}</td>
                                            @if(Auth::user()->role_id=="mahasiswa")
                                            <td> {{$mahasiswa->ipk}} </td>
                                            @else
                                            <td>
                                                <button
                                                    class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-primary"
                                                    >
                                                    <a href="{{ url('detail-alumni_mahasiswa',$mahasiswa->user_id) }}">
                                                        <i class="fas fa-edit">
                                                            Detail
                                                        </i>
                                                    </a>
                                                </button>
                                            </td>
                                            <td>
                                                @if($mahasiswa->status != 'Belum Tervalidasi' && $mahasiswa->user_id ==
                                                $mahasiswa->user_detail->id)
                                                <button
                                                    class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-success"
                                        
                                                    disabled>
                                                    <i data-feather="check"></i>

                                                </button>
                                                @else
                                                <button
                                                    class="text-red-500 hover:text-red-400 hover:text-red capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-danger"
                                                    >
                                                    <a href="{{ route('alumni.show',$mahasiswa->id) }}">
                                                        <i class="fas fa-edit">
                                                            Validate
                                                        </i>
                                                    </a>
                                                </button>

                                                @endif
                                            </td>
                                            <td>
                                                <button
                                                    class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 btn-outline-primary"
                                                    >
                                                    <a href="{{ route('profile.show',$mahasiswa->id) }}">
                                                        <i data-feather="edit"></i>
                                                    </a>
                                                </button>

                                            </td>
                                            @endif
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Multilingual -->

    </div>
</div>
@endsection
