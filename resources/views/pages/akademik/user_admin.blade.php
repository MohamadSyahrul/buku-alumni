@extends('template.master')
@section('title')
Poliwangi - User Akademik <?php echo date("M Y"); ?>
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
                            <h4 class="card-title">User Akademik</h4>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#TambahData" style="border-radius: 8px">Tambah User</button>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Mahasiswa</th>
                                                <th>Username</th>
                                                <th>Password</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($admin as $key => $mahasiswa)
                                            <tr>

                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$mahasiswa->name}}</td>
                                                <td>{{$mahasiswa->nim}}</td>
                                                <td>************</td>
                                                <td class="flex" style="margin-top: 1em;">
                                                    <a href="{{ route('user-Admin.edit',$mahasiswa->id) }}"
                                                        class="btn btn-icon btn-success mb-1">
                                                        <i data-feather="edit" title="Edit"></i>
                                                    </a>
<!--                                                     <form method="POST"
                                                        action="{{ route('user-Admin.destroy', $mahasiswa->id)}}"
                                                        onclick="deleteData('{{$mahasiswa->id}}', this)">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-danger mb-1">
                                                           
                                                                Delete
                                                        </button>
                                                    </form> -->
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

            <form action="{{ url('user-Admin')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama Akademik</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Username Akademik</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Password</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="password">
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
