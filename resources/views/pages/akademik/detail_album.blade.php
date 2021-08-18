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
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Detail Profile</h2>
                </div>
            </div>
        </div>
    </div>
    @foreach($mahasiswa as $row)

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
                                    <img src="{{ asset('Foto-Mahasiswa/'.$row->foto) }}" class="rounded img-fluid"
                                        alt="Not Image" />
                                </div>
                                <!-- profile title -->
                                <div class="profile-title ml-3">
                                    <h2 class="text-white">{{$row->nama}}</h2>
                                    <p class="text-white">{{$row->nim}}</p>
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
                                    {{$row->tempat_lahir}}
                                </p>
                                <div class="mt-2">
                                    <h5 class="mb-75">Tanggal Lahir</h5>
                                    <p class="card-text">
                                        {{Carbon\Carbon::parse($row->tanggal_lahir)->translatedFormat('d F Y')}}
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75">Jenis Kelamin</h5>
                                    <p class="card-text">{{$row->jenis_kelamin}}</p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75">Prodi</h5>
                                    <p class="card-text">{{$row->prodi}}</p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-50">Alamat</h5>
                                    <p class="card-text mb-0">{{$row->alamat}}</p>
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
                                    {{$row->lama_studi}}
                                </p>
                                <div class="mt-2">
                                    <h5 class="mb-75">Judul Laporan</h5>
                                    <p class="card-text">{{$row->judul_laporan}}</p>
                                </div>
                                <div class="mt-2">
                                    <h5 class="mb-75">Sosmed</h5>
                                    <p class="card-text">{{$row->sosmed}}</p>
                                </div>
                                @if($row->ipk != '')
                                <div class="mt-2">
                                    <h5 class="mb-75">IPK</h5>
                                    <p class="card-text">{{$row->ipk}}</p>
                                </div>
                                @else
                                <div class="mt-2">
                                    <h5 class="mb-50">IPK</h5>
                                    <p class="card-text mb-0"> - </p>
                                </div>
                                @endif
                                <div class="mt-2">
                                    <h5 class="mb-50">Angkatan</h5>
                                    <p class="card-text mb-0"> {{$row->angkatan}} </p>
                                </div>
                            </div>
                        </div>
                        <!--/ about -->

                    </div>
                </div>

            </section>
            <!--/ profile info section -->
        </div>

    </div>

    @endforeach
</div>




@endsection
@push('plugin-script')
<script src="{{asset('admin/app-assets/js/scripts/pages/page-profile.js')}}"></script>
@endpush
