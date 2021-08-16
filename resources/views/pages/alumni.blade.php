@extends('template.master')
@section('title')
Poliwangi - Alumni <?php echo date("M Y"); ?>
@endsection

@push('plugin-style')
<link rel="stylesheet" type="text/css"
    href="{{asset('vuexy/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vuexy/app-assets/vendors/css/vendors.min.css')}}">
@endpush

@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">DataTables</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Data Alumni</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
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
                                                <th colspan="3" class="text-center">Action</th>
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
                                                    <a href="{{ url('detail-alumni_mahasiswa',$mahasiswa->user_id) }}"
                                                        class="btn btn-warning" title="Detail">
                                                        <i data-feather='external-link'></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if($mahasiswa->status != 'Belum Tervalidasi' && $mahasiswa->user_id
                                                    ==
                                                    $mahasiswa->user_detail->id)
                                                    <button class="btn btn-success">
                                                        <i data-feather="check"></i>
                                                    </button>
                                                    @else
                                                    <a href="{{ route('alumni.show',$mahasiswa->id) }}"
                                                        class="btn btn-info">
                                                        Validate
                                                    </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('profile.show',$mahasiswa->id) }}"
                                                        class="btn btn-primary" title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a>

                                                </td>
                                                @endif
                                            </tr>
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>
</div>
@endsection

@push('plugin-script')
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vuexy/app-assets/js/scripts/datatables/datatable.js')}}"></script>
@endpush

@push('custom-script')
<script>
    $.fn.dataTable.ext.errMode = 'throw';
    $(window).on('load', function () {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })

</script>
@endpush
