@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@push('plugin-style')

<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/vendors.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
@endpush
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
                                    Album
                                </h4>
                                @if(count(array($album)) <1) <div class="form-group row"
                                    >
                                    <p style="font-size: 30px"> BELUM ADA ALBUM</p>
                                 @else
                            </div>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-multilingual table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama Album</th>
                                        <th>Tahun</th>
                                        <th>Detail Album</th>
                                        <th>Download Album</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($album as $key=> $album)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td><img src="{{ asset('/Akademik-Album/'.$album->gambar_album) }}"
                                                style=";max-height: 50px;max-width: 50px;"></td>
                                        <td>{{$album->nama_album}}</td>
                                        <td>{{$album->tahun_terbit}}</td>
                                        <td> 
                                                <a href="{{ url('detail-album-alumni',$album->angkatan) }}"  class="btn btn-icon btn-success mb-1">
                                                    <i class="fas fa-link">
                                                        Detail Album
                                                    </i>
                                                </a>
                                        </td>

                                        <td>
                                                <a href="{{ url('download-album',$album->angkatan) }}"  class="btn btn-icon btn-primary mb-1">
                                                    <i class="fas fa-link">
                                                        Download Album
                                                    </i>
                                                </a>
                                        </td>
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
