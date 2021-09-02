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
                    <h2 class="content-header-title float-left mb-0"></h2>
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
                                                <th>Foto</th>
                                                <th>NIM</th>
                                                <th>Mahasiswa</th>
                                                <th>Jurusan</th>
                                                <th>Angkatan</th>
                                                @if(Auth::user()->role_id=="mahasiswa")
                                                <th> Sosmed </th>
                                                <th> Telepon </th>
                                                <!-- <th> IPK </th> -->
                                                @else
                                                <!-- <th>IPK</th> -->
                                                <th colspan="3" class="text-center">Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($mahasiswa as $key=> $mahasiswa)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                @if($mahasiswa->foto != null)
                                                   <td><img src="{{ asset('/Foto-Mahasiswa/'.$mahasiswa->foto) }}" style=";max-height: 50px;max-width: 50px;"></td>
                                                @else
                                                    <td><img src="{{ asset('Poliwangi_Logo.png') }}" style=";max-height: 50px;max-width: 50px;"></td>
                                                @endif
                                                <td>{{$mahasiswa->nim}}</td>
                                                <td>{{$mahasiswa->nama}}</td>
                                                <td>{{$mahasiswa->prodi}}</td>
                                                <td>{{$mahasiswa->angkatan}}</td>
                                                @if(Auth::user()->role_id=="mahasiswa")
                                                <td> {{$mahasiswa->sosmed}} </td>
                                                <td> {{$mahasiswa->telepon}} </td>
                                                <!-- <td> {{$mahasiswa->ipk}} </td> -->
                                                @else
                                                <td>
                                                    <a href="{{ url('detail-alumni_mahasiswa',$mahasiswa->user_id) }}"
                                                        class="btn btn-warning" title="Detail">
                                                        <i data-feather='external-link'></i>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if($mahasiswa->status != 'Belum Tervalidasi')
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
                                                {{-- modal --}}
                                                <td>
                                                    <a href="{{ url('update-user_profil',$mahasiswa->id) }}"
                                                        class="btn btn-primary" title="Edit">
                                                        <i data-feather="edit"></i>
                                                    </a> 
                                               <!--      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#UbahData{{$mahasiswa->id}}">
                                                        <i data-feather="edit"></i>
                                                    </button> -->
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

{{-- @foreach($mahasiswa as $item) --}}

{{-- modal --}}
{{-- <div class="modal fade" id="UbahData{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ url('profile' , $item->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">NIM</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->nim}}" name="nim">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nama</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->nama}}" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Tempat Lahir</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->tempat_lahir}}"
                                name="tempat_lahir">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Tanggal Lahir</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" value="{{$item->tanggal_lahir}}"
                                name="tanggal_lahir">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="jenis_kelamin" class="form-control" value="{{$item->jenis_kelamin}}">
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Prodi</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="prodi" class="form-control" value="{{$item->nama_prodi}}">
                                @foreach($prodi as $key => $PA)
                                <option value="{{$PA->nama_prodi}}"> {{$PA->nama_prodi}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->alamat}}" name="alamat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Telepon/HP</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->telepon}}" name="telepon">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Lama Studi</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->lama_studi}}" name="lama_studi"
                                placeholder="Contoh 3 Tahun 8 Bulan ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Judul Laporan</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" class="form-control" value="{{$item->judul_laporan}}"
                                name="judul_laporan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Sosmed</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="sosmed" value="{{$item->sosmed}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Pekerjaan</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="pekerjaan" value="{{$item->pekerjaan}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">IPK</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="text" name="ipk" value="{{$item->ipk}}" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Angkatan Wisuda</label>
                        </div>
                        <div class="col-lg-8">
                            <select name="angkatan" class="form-control" value="{{$item->angkatan}}">
                                @if(count(array($album)) <1) <option disabled value=""> BELUM ADA
                                    ALBUM </option>
                                    @else
                                    @foreach($album as $key => $PA)
                                    <option value="{{$PA->angkatan}}"> {{$PA->angkatan}} </option>
                                    @endforeach
                                    @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Foto</label>
                        </div>
                        <div class="col-lg-8">
                            <input type="file" class="form-control" name="foto" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal
                        </button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>

            </form>
        </div>
    </div>
</div>

@endforeach --}}

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
