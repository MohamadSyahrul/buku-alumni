@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection

@push('plugin-style')
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin/app-assets/vendors/css/tables/datatable/rowGroup.bootstrap4.min.css')}}">
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
                            <h4 class="card-title">Program Studi</h4>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                data-target="#TambahData">Tambah
                                Prodi</button>
                                {{-- @if($prodi->count() < 1) <div class="form-group row"
                            style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
                            <p style="font-size: 30px"> BELUM ADA Prodi</p> --}}
                        </div>
                        {{-- @else --}}
                        <div class="card-datatable">
                            <table class="dt-multilingual table">
                                <thead>
                                    <tr>
                                      <th>No</th>
                                      <th>Nama Prodi</th>
                                      <th>Grade</th>
                                      <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($prodi as $key => $prodi)
                                  <tr>
  
                                      <td>{{$key+1}}</td>
                                      <td>{{$prodi->nama_prodi}}</td>
                                      <td>{{$prodi->grade}}</td>
                                      <td>
                                              <a href="{{ route('prodi.edit',$prodi->id) }}" class="btn btn-icon btn-success mb-1">
                                                <i data-feather="edit"></i>
                                              </a>
  
                                          <form method="POST" action="{{ route('prodi.destroy', $prodi->id)}}"
                                              onclick="deleteData('{{$prodi->id}}', this)">
                                              @csrf
                                              @method('DELETE')
                                              <button type="submit"
                                                  class="btn btn-icon btn-danger">
                                                  <i data-feather='trash-2'></i>
                                              </button>
                                          </form>
                                      </td>
                                  </tr>
                                  @endforeach
                                  {{-- @endif --}}
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
                <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ url('prodi')}}" enctype="multipart/form-data" method="post">
                @csrf

                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama Prodi</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="nama_prodi">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Grade</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" name="grade">
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