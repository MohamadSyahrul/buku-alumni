@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection


@section('content')
    
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <section class="app-user-view">
            <!-- User Card & Plan Starts -->
            <div class="row">
                <!-- User Card starts-->
                <div class="col-xl-12 col-lg-8 col-md-7">
                    <div class="card user-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 d-flex flex-column justify-content-between border-container-lg">
                                    <div class="user-avatar-section">
                                        <div class="d-flex justify-content-start">
                                            <img class="img-fluid rounded" src="{{asset('admin/app-assets/images/avatars/7.png')}}" height="104" width="104" alt="User avatar" />
                                            <div class="d-flex flex-column ml-1">
                                                <div class="user-info mb-1">
                                                    <h4 class="mb-0">Eleanor Aguilar</h4>
                                                    <span class="card-text">eleanor.aguilar@gmail.com</span>
                                                </div>
                                                <div class="d-flex flex-wrap">
                                                    <a href="./app-user-edit.html" class="btn btn-primary">Edit</a>
                                                    <button class="btn btn-outline-danger ml-1">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 mt-2 mt-xl-0">
                                    <div class="user-info-wrapper">
                                        <div class="d-flex flex-wrap">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="voicemail" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Nim :</span>
                                            </div>
                                            <p class="card-text mb-0">28212188</p>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="user" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Nama :</span>
                                            </div>
                                            <p class="card-text mb-0">eleanor.aguilar</p>
                                        </div>
                                        <div class="d-flex flex-wrap my-50">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="check" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Tempat Lahir :</span>
                                            </div>
                                            <p class="card-text mb-0">Active</p>
                                        </div>
                                        <div class="d-flex flex-wrap my-50">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="star" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Tanggal Lahir :</span>
                                            </div>
                                            <p class="card-text mb-0">Admin</p>
                                        </div>
                                        <div class="d-flex flex-wrap my-50">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="flag" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Prodi :</span>
                                            </div>
                                            <p class="card-text mb-0">England</p>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="phone" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Alamat :</span>
                                            </div>
                                            <p class="card-text mb-0">(123) 456-7890</p>
                                        </div>
                                        <div class="d-flex flex-wrap">
                                            <div class="user-info-title mr-2">
                                                <i data-feather="trending-up" class="mr-1"></i>
                                                <span class="card-text user-info-title font-weight-bold mb-0">Lama Studi :</span>
                                            </div>
                                            <p class="card-text mb-0">(123) 456-7890</p>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /User Card Ends-->

            </div>
            <!-- User Card & Plan Ends -->
        </section>

    </div>
</div>
@endsection
