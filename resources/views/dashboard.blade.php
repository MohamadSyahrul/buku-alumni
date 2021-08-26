@extends('template.master')
@section('title')
Buku Alumni
@endsection
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- Dashboard Ecommerce Starts -->
        <section id="dashboard-ecommerce">
            <div class="row match-height">

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card card-congratulations">
                        <div class="card-body text-center">
                            <img src="{{asset('admin/app-assets/images/elements/decore-left.png')}}"
                                class="congratulations-img-left" alt="card-img-left" />
                            <img src="{{asset('admin/app-assets/images/elements/decore-right.png')}}"
                                class="congratulations-img-right" alt="card-img-right" />
                            <div class="avatar avatar-xl bg-primary shadow">
                                <div class="avatar-content">
                                    <i data-feather="award" class="font-large-1"></i>
                                </div>
                            </div>
                            <div class="text-center">
                                <h1 class="mb-1 text-white">Selamat Datang {{Auth::user()->name}},</h1>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Greetings Card ends -->

                <!-- Developer Meetup Card -->
                <div class="col-lg-12 col-md-6 col-12">
                    <div class="card card-developer-meetup">
                        <div class="meetup-img-wrapper rounded-top text-center">
                            <img src="{{asset('admin/app-assets/images/illustration/email.svg')}}" alt="Meeting Pic"
                                height="170" />
                        </div>

                    </div>
                </div>
                <!--/ Developer Meetup Card -->

            </div>
        </section>
        <!-- Dashboard Ecommerce ends -->

    </div>
</div>
@endsection