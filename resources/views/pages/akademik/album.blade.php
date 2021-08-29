@extends('template.master')
@section('title')
Poliwangi - Album <?php echo date("M Y"); ?>
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
                            <h4 class="card-title">Program Studi</h4>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#TambahData">Tambah
                                Album Wisuda</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Gambar</th>
                                                <th>Header</th>
                                                <th>Nama Album</th>
                                                <th>Tahun</th>
                                                <th>Detail Album</th>
                                                <th>Download Album</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($album as $key=> $album)
                                            <tr>

                                                <td>{{$key+1}}</td>
                                                <td><img src="{{ asset('/Akademik-Album/'.$album->gambar_album) }}"
                                                        style=";max-height: 50px;max-width: 50px;"></td>
                                                <td><img src="{{ asset('/Akademik-Album-Header/'.$album->header_album) }}"
                                                        style=";max-height: 50px;max-width: 50px;"></td>
                                                <td>{{$album->nama_album}}</td>
                                                <td>{{$album->tahun_terbit}}</td>
                                                <td>
                                                    <a href="{{ url('detail-album-alumni',$album->angkatan) }}"  class="btn btn-info mb-1">
                                                       
                                                            Detail Album
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('download-album',$album->angkatan) }}"  class="btn btn-success mb-1">
                                                       
                                                            Download Album
                                                    </a>
                                                </td>
                                                <td class="flex" style="margin-top: 1em;">
                                                    <a href="{{ route('album-akademik.edit',$album->id) }}"  class="btn btn-warning mb-1">
                                                     
                                                            Edit
                                                        
                                                    </a>

                                                    <form method="POST"
                                                        action="{{ route('album-akademik.destroy', $album->id)}}"
                                                        onclick="deleteData('{{$album->id}}', this)">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"  class="btn btn-danger mb-1">
                                                                Delete
                                                        </button>
                                                    </form>
                                                </td>
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

{{-- modal --}}
<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ url('album-akademik')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama Album</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nama_album">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Angkatan Wisuda</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="angkatan">
                        </div>
                    </div>
<!--                     <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Tahun Terbit</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="tahun_terbit">
                        </div>
                    </div> -->
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>

            </form>
        </div>
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
