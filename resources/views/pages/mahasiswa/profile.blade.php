@extends('template.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@push('plugin-style')
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/css/pages/page-profile.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">

    @if($mahasiswa->count() > 0)
    @foreach($mahasiswa as $mahasiswau)
    @if($mahasiswau->status != 'Belum Tervalidasi' && $mahasiswau->user_id == $mahasiswau->user_detail->id)
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Profile</h2>

                    <!-- edit button -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UbahData">
                        <i data-feather="edit" class="d-block d-md-none"></i>
                        <span class="font-weight-bold d-none d-md-block">Edit</span>
                    </button>

                </div>
            </div>
        </div>
    </div>
    @else
    <section id="profile-info">
        <div class="row">
            <!-- left profile info section -->
            <div class="col-lg-12 col-12 order-2 order-lg-1">
                <!-- about -->
                <div class="card">
                 <div class="card-body">

                    <h2 class="content-header-title float-left mb-0"> {{ $mahasiswau->nama }}, Mohon Konfirmasi Ke Pihak Akademik Untuk Validasi Akun Anda</h2>

                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
@else
<div class="content-header row">
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Profile</h2>

                <!-- add button -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahData">
                    <i data-feather="edit" class="d-block d-md-none" ></i>
                    <span class="font-weight-bold d-none d-md-block">Tambah</span>
                </button>

            </div>
        </div>
    </div>
</div>


@endif
@foreach($mahasiswa as $mahasiswa)
@if($mahasiswa->status != 'Belum Tervalidasi' && $mahasiswa->user_id == $mahasiswa->user_detail->id)

<div class="content-body">
    <div id="user-profile">
        <!-- profile header -->
        <div class="row">
            <div class="col-12">
                <div class="card profile-header mb-2">

                    <!-- profile cover photo -->
                    <img class="card-img-top"
                    src="{{asset('admin/app-assets/images/profile/user-uploads/timeline.jpg')}}"
                    alt="User Profile Image" />
                    <!--/ profile cover photo -->

                    <div class="position-relative">
                        <!-- profile picture -->
                        <div class="profile-img-container d-flex align-items-center">
                            <div class="profile-img">
                                <img src="{{ asset('Foto-Mahasiswa/'.$mahasiswa->foto) }}" class="rounded img-fluid"
                                alt="Card image" />
                            </div>
                            <!-- profile title -->
                            <div class="profile-title ml-3">
                                <h2 class="text-white">{{$mahasiswa->nama}}</h2>
                                <p class="text-white">{{$mahasiswa->nim}}</p>
                            </div>
                        </div>
                    </div>

                    <!-- tabs pill -->
                    <div class="profile-header-nav">
                        <!-- navbar -->
                        <nav
                        class="navbar navbar-expand-md navbar-light justify-content-end justify-content-md-between w-100">
                        <button class="btn btn-icon navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i data-feather="align-justify" class="font-medium-5"></i>
                    </button>

                    <!-- collapse  -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="profile-tabs d-flex justify-content-between flex-wrap mt-1 mt-md-0">

                        </div>
                    </div>
                    <!--/ collapse  -->
                </nav>
                <!--/ navbar -->
            </div>
        </div>
    </div>
</div>
<!--/ profile header -->
<!-- profile info section -->
<section id="profile-info">
    <div class="row">
        <!-- left profile info section -->
        <div class="col-lg-6 col-12 order-2 order-lg-1">
            <!-- about -->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-75">Tempat Lahir</h5>
                    <p class="card-text">
                        {{$mahasiswa->tempat_lahir}}
                    </p>
                    <div class="mt-2">
                        <h5 class="mb-75">Tanggal Lahir</h5>
                        <p class="card-text">
                            {{Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y')}}
                        </p>
                    </div>
                    <div class="mt-2">
                        <h5 class="mb-75">Jenis Kelamin</h5>
                        <p class="card-text">{{$mahasiswa->jenis_kelamin}}</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="mb-75">Prodi</h5>
                        <p class="card-text">{{$mahasiswa->prodi}}</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="mb-50">Alamat</h5>
                        <p class="card-text mb-0">{{$mahasiswa->alamat}}</p>
                    </div>
                </div>
            </div>
            <!--/ about -->

        </div>
        <!--/ left profile info section -->
        <div class="col-lg-6 col-12 order-2 order-lg-1">
            <!-- about -->
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-75">Lama Studi</h5>
                    <p class="card-text">
                        {{$mahasiswa->lama_studi}}
                    </p>
                    <div class="mt-2">
                        <h5 class="mb-75">Judul Laporan</h5>
                        <p class="card-text">{{$mahasiswa->judul_laporan}}</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="mb-75">Sosmed</h5>
                        <p class="card-text">{{$mahasiswa->sosmed}}</p>
                    </div>
                    <div class="mt-2">
                        <h5 class="mb-75">Tahun Lulus</h5>
                        <p class="card-text">{{$mahasiswa->tahun_lulus}}</p>
                    </div>
                    @if($mahasiswa->ipk != '')
                    <div class="mt-2">
                        <h5 class="mb-75">IPK</h5>
                        <p class="card-text">{{$mahasiswa->ipk}}</p>
                    </div>
                    @else
                    <div class="mt-2">
                        <h5 class="mb-50">IPK</h5>
                        <p class="card-text mb-0"> - </p>
                    </div>
                    @endif
                    <div class="mt-2">
                        <h5 class="mb-50">Angkatan Wisuda</h5>
                        <p class="card-text mb-0"> {{$mahasiswa->angkatan}} </p>
                    </div>
                </div>
            </div>
            <!--/ about -->

        </div>
    </div>

</section>
@else
@endif
<!--/ profile info section -->
</div>

</div>

@endforeach
</div>

<!-- modal -->
@if($mahasiswa->count() > 0)
<div class="modal fade" id="UbahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ url('profile' , $mahasiswa->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">NIM</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->nim}}" name="nim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->nama}}" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->tempat_lahir}}"
                            name="tempat_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" value="{{$mahasiswa->tanggal_lahir}}"
                            name="tanggal_lahir">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="jenis_kelamin" class="form-control" value="{{$mahasiswa->jenis_kelamin}}">
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Prodi</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="prodi" class="form-control" value="{{$mahasiswa->nama_prodi}}">
                                @foreach($prodi as $key => $PA)
                                <option value="{{$PA->nama_prodi}}"> {{$PA->nama_prodi}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->alamat}}" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Telepon/HP</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->telepon}}" name="telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Lama Studi</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->lama_studi}}" name="lama_studi"
                            placeholder="Contoh 3 Tahun 8 Bulan ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Judul Laporan</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$mahasiswa->judul_laporan}}"
                            name="judul_laporan">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Tahun
                                Lulus</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" name="tahun_lulus" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Sosmed</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="sosmed" value="{{$mahasiswa->sosmed}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Pekerjaan</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="pekerjaan" value="{{$mahasiswa->pekerjaan}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">IPK</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="ipk" value="{{$mahasiswa->ipk}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Angkatan Wisuda</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="angkatan" class="form-control" value="{{$mahasiswa->angkatan}}">
                                @if(count(array($album)) <1) <option disabled value=""> BELUM ADA
                                ALBUM </option>
                                @else
                                @foreach($album as $key => $PA)
                                <option value="{{$PA->angkatan}}"> {{$PA->angkatan}} </option>
                                @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Foto</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @else
    <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form class="form form-horizontal" action="{{ url('profile')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <section id="basic-horizontal-layouts">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-3 col-form-label">
                                                        <label>NIM</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" name="nim">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Nama</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <select name="nama" class="form-control">
                                                            <option value="{{$data_user->name}}">
                                                                {{$data_user->name}} </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Tempat
                                                            Lahir</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="tempat_lahir">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Tanggal
                                                            Lahir</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="date" class="form-control" name="tanggal_lahir">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Jenis
                                                            Kelamin</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="jenis_kelamin" class="form-control">
                                                                <option value="laki-laki">laki-laki
                                                                </option>
                                                                <option value="perempuan">perempuan
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Prodi</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="prodi" class="form-control">
                                                                @foreach($prodi as $key => $PA)
                                                                <option value="{{$PA->nama_prodi}}">
                                                                    {{$PA->nama_prodi}}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Alamat</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="alamat">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Telepon/HP</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="telepon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Lama
                                                            Studi</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="lama_studi"
                                                            placeholder="Contoh 3 Tahun 8 Bulan ">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Judul
                                                            Laporan</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" class="form-control" name="judul_laporan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Tahun
                                                            Lulus</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="tahun_lulus" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Sosmed</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="sosmed" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-3">
                                                        <label class="col-form-label">Pekerjaan</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <input type="text" name="pekerjaan" value="" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">IPK</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="text" name="ipk" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Angkatan
                                                            Wisuda</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <select name="angkatan" class="form-control">
                                                                @if(count(array($album)) <1) <option disabled value="">
                                                                    BELUM ADA
                                                                ALBUM </option>
                                                                @else
                                                                @foreach($album as $key => $PA)
                                                                <option value="{{$PA->angkatan}}">
                                                                    {{$PA->angkatan}}
                                                                </option>
                                                                @endforeach
                                                                @endif
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group row">
                                                        <div class="col-lg-3">
                                                            <label class="col-form-label">Foto</label>
                                                        </div>
                                                        <div class="col-lg-8">
                                                            <input type="file" class="form-control" name="foto">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @endif

    <!-- modal -->

    @endsection
    @push('plugin-script')
    <script src="{{asset('admin/app-assets/js/scripts/pages/page-profile.js')}}"></script>
    @endpush
