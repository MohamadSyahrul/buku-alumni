@extends('template.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">Form Edit Password</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Basic Horizontal form layout section start -->
        <section id="basic-horizontal-layouts">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body">
                            <form class="form form-horizontal"
                                action="{{url('update-password')}}"
                                enctype="multipart/form-data" method="POST">
                                @method('PATCH')
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="first-name">Nama</label>
                                            </div>
                                            <div class="col-sm-9">
                                               <input type="text" class="form-control" value="{{$user->name}}" name="name_edit" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="email-id">NIM</label>
                                            </div>
                                            <div class="col-sm-9">
                                               <input type="text" class="form-control" value="{{$user->nim}}" name="nim_edit" required>

                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-12">
                                        <div class="form-group row">
                                            <div class="col-sm-3 col-form-label">
                                                <label for="password">Password</label>
                                            </div>
                                            <div class="col-sm-9">
                                               <input type="text" class="form-control"  name="password" required>

                                            </div>
                                        </div>
                                    </div>
   
                                    <div class="col-sm-9 offset-sm-3">
                                        <button type="submit" class="btn btn-primary mr-1">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary">Reset</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic Horizontal form layout section end -->

    </div>
</div>
@endsection
