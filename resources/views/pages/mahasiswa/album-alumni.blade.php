\\@extends('template.master')
@section('title')
Poliwangi - Alumni <?php echo date("M Y"); ?>
@endsection

@push('plugin-style')
<link rel="stylesheet" type="text/css" href="{{asset('vuexy/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
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
                    <h2 class="content-header-title float-left mb-0">Album</h2>
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
                            <h4 class="card-title"> Album</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <table class="table zero-configuration">
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
                                                      <a href="{{ url('detail-album-alumni',$album->angkatan) }}"  class="btn btn-success mb-1">
                                                          
                                                              Detail Album
                                                          </i>
                                                      </a>
                                              </td>
      
                                              <td>
                                                      <a href="{{ url('download-album',$album->angkatan) }}"  class="btn btn-primary mb-1">
                                                          
                                                              Download Album
                                                          </i>
                                                      </a>
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
