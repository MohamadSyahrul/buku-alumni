@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
{{-- @section('content')


<style type="text/css">
    .upload-btn-wrapper {
        position: relative;
        overflow: hidden;
        display: inline-block;
    }

    .btn-upload {
        border: 1px solid #7367F0;
        color: #7367F0;
        background-color: transparent;
        /*padding: 8px 12px;*/
        padding: 0.786rem 1.5rem;
        border-radius: 8px;
        font-size: 1rem;
        /*font-weight: bold;*/
        font-weight: 500;

    }

    .upload-btn-wrapper input[type=file] {
        /*font-size: 100px;*/
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

</style>
<x-app-layout>
    <x-slot name="header">


        <div class="dropdown mb-2" style="background-color: #fff">
            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#TambahData"
                style="border-radius: 8px">Tambah User</button>
            <form method="post" action="{{url('import-mahasiswa-excel')}}" enctype="multipart/form-data">
                @csrf

                <div class="upload-btn-wrapper">
                    <button class="btn-upload btn-outline-primary">Upload CSV file</button>
                    <input type="file" name="file" />
                </div>


            </form>
        </div>
        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        @if(count(array($mahasiswa)) <1) <div class="form-group row"
                            style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
                            <p style="font-size: 30px"> BELUM ADA DATA</p>
                    </div>
                    @else
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($mahasiswa as $key => $mahasiswa)
                                <tr>

                                    <td>{{$key+1}}</td>
                                    <td>{{$mahasiswa->name}}</td>
                                    <td>{{$mahasiswa->email}}</td>
                                    <td>************</td>
                                    <td class="flex" style="margin-top: 1em;">
                                        <button
                                            class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 "
                                            style="margin-right: 1em;">
                                            <a href="{{ route('user-mahasiswa.edit',$mahasiswa->id) }}">
                                                <i class="fas fa-edit">
                                                    Edit
                                                </i>
                                            </a>
                                        </button>

                                        <form method="POST"
                                            action="{{ route('user-mahasiswa.destroy', $mahasiswa->id)}}"
                                            onclick="deleteData('{{$mahasiswa->id}}', this)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:text-red-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300">
                                                <i class="fas fa-trash">
                                                    Delete
                                                </i>
                                            </button>
                                        </form>
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
        </div>

    </x-slot>
    <div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="{{ url('user-mahasiswa')}}" enctype="multipart/form-data" method="post">
                    @csrf

                    <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nama Mahasiswa</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Email Mahasiswa</label>
                            </div>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="email">
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
    <script type="text/javascript">
        function editData(id) {
            console.log(id);
        }

        function deleteData(id, event) {
            Swal.fire({
                title: 'Apakah yakin menghapus data ini ?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus aja!'
            }).then((result) => {
                if (result.value) {
                    event.submit();

                }
            })
        }
        $(function () {
            $("#date").datepicker({
                dateFormat: 'yy'
            });
        });​

    </script>
</x-app-layout>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection
 --}}



@push('plugin-style')
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css"
    href="{{asset('admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
@endpush
@section('content')
<div class="content-overlay"></div>
<div class="header-navbar-shadow"></div>
<div class="content-wrapper">
    <div class="content-body">
        <!-- Multilingual -->
        <section id="multilingual-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header border-bottom">
                            <h4 class="card-title">Akun Mahasiswa</h4>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#TambahData" style="border-radius: 8px">Tambah User</button>

                            <form method="post" action="{{url('import-mahasiswa-excel')}}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="upload-btn-wrapper">
                                    <button class="btn-upload btn-outline-primary">Upload CSV file</button>
                                    <input type="file" name="file" />
                                </div>


                            </form>
                        </div>
                        <div class="card-datatable">
                            <table class="dt-multilingual table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Mahasiswa</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mahasiswa as $key => $mahasiswa)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$mahasiswa->name}}</td>
                                        <td>{{$mahasiswa->email}}</td>
                                        <td>************</td>
                                        <td class="flex" style="margin-top: 1em;">
                                                <a href="{{ route('user-mahasiswa.edit',$mahasiswa->id) }}" class="btn btn-icon btn-icon rounded-circle btn-outline-success mb-1">
                                                  <i data-feather="edit"></i>

                                                </a>
                                                

                                            <form method="POST"
                                                action="{{ route('user-mahasiswa.destroy', $mahasiswa->id)}}"
                                                onclick="deleteData('{{$mahasiswa->id}}', this)">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                class="btn btn-icon btn-icon rounded-circle btn-outline-danger">
                                                <i data-feather="trash-2"></i>

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
        </section>
        <!--/ Multilingual -->
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

            <form action="{{ url('user-mahasiswa')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama Mahasiswa</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Email Mahasiswa</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="email">
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
@push('custom-script')
<script type="text/javascript">
    function editData(id) {
        console.log(id);
    }

    function deleteData(id, event) {
        Swal.fire({
            title: 'Apakah yakin menghapus data ini ?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus aja!'
        }).then((result) => {
            if (result.value) {
                event.submit();

            }
        })
    }
    $(function () {
        $("#date").datepicker({
            dateFormat: 'yy'
        });
    });​

</script>
@endpush
@push('plugin-script')
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap4.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.checkboxes.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/jszip.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/tables/datatable/dataTables.rowGroup.min.js')}}"></script>
<script src="{{asset('admin/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js')}}"></script>
@endpush
