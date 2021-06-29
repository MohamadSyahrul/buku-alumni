@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<!DOCTYPE html>
<x-app-layout>
    <x-slot name="header">

        <div class="container">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        @foreach($mahasiswa as $row)

                              <table>

                        @if($row->foto == null)
                        <hr / size="10px">

                        <div class="col-lg-9 d-none d-lg-block "
                            style="background-image: url('{{ asset('Poliwangi Logo.png')}} '); background-size: cover;background-position: center;max-height: 150px;max-width: 150px;margin-left:5em;margin-top: 10em;margin-right: 5em">
                        </div>
                        @else
                        <hr / size="10px">

                        <div class="col-lg-9 d-none d-lg-block "
                            style="background-image: url(' {{ asset('Foto-Mahasiswa/'.$row->foto) }} '); background-size: cover;background-position: center;max-height: 150px;max-width: 150px;margin-left:5em;margin-top: 10em;margin-right: 5em">
                        </div>

                        @endif
                        

                        <div class="col-lg-7">
                            <div class="p-0">
                                @if($mahasiswa->count() > 0)
                        <hr / size="10px" width="100%">

                                <div class="form-group row" style="padding-top: 1em;">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Nim </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->nim}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Nama </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->nama}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Tempat Lahir </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->tempat_lahir}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Tanggal Lahir </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">
                                            :{{Carbon\Carbon::parse($row->tanggal_lahir)->translatedFormat('d F Y')}}
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Jenis Kelamin </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->jenis_kelamin}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Prodi </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->prodi}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Alamat </h6>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->alamat}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Lama Studi </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->lama_studi}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Judul Laporan </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->judul_laporan}}</div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Sosmed </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->sosmed}}</div>
                                    </div>
                                </div>
                                @if($row->ipk != '')
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6> IPK </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: {{$row->ipk}}</div>
                                    </div>
                                </div>
                                @else
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6> IPK </h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">: - </div>
                                    </div>
                                </div>

                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-2 mb-3 mb-sm-0">
                                        <h6>Angkatan</h6>
                                    </div>
                                    <div class="col-sm-10">
                                        <div class="sidebar-brand-text mx-3">
                                            : {{$row->angkatan}}
                                        </div>
                                    </div>
                                </div>


                                @else
                                <div class="col-lg-9 d-none d-lg-block"
                                    style="padding-top: 4em;padding-bottom: 4em;margin-left: 20em;">
                                    <p style="font-size: 30px"> BELUM ADA DATA</p>
                                </div>
                                @endif
                            </div>
                        </div>
</table>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        </div>
    </x-slot>
    
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
                confirmButtonText: 'Yes, delete it!'
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
@endsection
