@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Album</h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{ route('album-akademik.update' , $album->id)}}"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row">

                                    <div class="modal-body">
                                        <div class="form-group row">
                                            <div class="col-lg-3">
                                                <label class="col-form-label">Nama Album</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" value="{{$album->nama_album}}" class="form-control"
                                                    name="nama_album">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3">
                                                <label class="col-form-label">Angkatan</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="text" value="{{$album->angkatan}}" class="form-control"
                                                    name="angkatan">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3">
                                                <label class="col-form-label">Gambar Album</label>
                                            </div>
                                            <div class="col-lg-8">
                                                <input type="file" class="form-control" name="gambar_album">
                                            </div>
                                        </div>
                                                           <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Header Album</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" class="form-control" name="header_album">
                        </div>
                    </div>
                                    </div>
                                    <div class="modal-footer">
                                <!--         <button type="button" class="btn btn-danger" data-dismiss="modal">Batal
                                        </button> -->
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>

                            </form>
                            {{-- <form class="form form-horizontal">
                                <div class="row">


                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="first-name">First Name</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="text" id="first-name" class="form-control" name="fname"
                                                    placeholder="First Name" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="email-id">Email</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="email" id="email-id" class="form-control" name="email-id"
                                                    placeholder="Email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="contact-info">Mobile</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="number" id="contact-info" class="form-control"
                                                    name="contact" placeholder="Mobile" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-sm-9">
                                                <input type="password" id="password" class="form-control"
                                                    name="password" placeholder="Password" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1" />
                                                <label class="custom-control-label" for="customCheck1">Remember
                                                    me</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="reset" class="btn btn-primary mr-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Horizontal form layout section end -->
    </div>
</div>
@endsection
{{-- 
@section('content')
<x-app-layout>
    <x-slot name="header">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ route('album-akademik.update' , $album->id)}}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nama Album</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" value="{{$album->nama_album}}" class="form-control"
                                    name="nama_album">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Angkatan</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" value="{{$album->angkatan}}" class="form-control" name="angkatan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Gambar Album</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="file" class="form-control" name="gambar_album">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                </form>
            </div>
        </div>
    </x-slot>
</x-app-layout>
@endsection --}}
