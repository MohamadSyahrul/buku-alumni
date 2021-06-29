@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<x-app-layout>
  <x-slot name="header">


  <!--   <div class="dropdown mb-2" style="background-color: #fff">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#TambahData">Tambah Album Wisuda</button>

    </div> -->
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            @if($mahasiswa->count() < 1)


            <div class="form-group row" style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
              <p style="font-size: 30px"> BELUM ADA ALUMNI</p>
            </div> 
            @else
            <div class="table-responsive">
              <table id="dataTableExample" class="table">
                <thead>
                  <tr>
                   <th>No</th>
                   <th>NIM</th>
                   <th>Nama Mahasiswa</th>
                   <th>Jurusan</th>
                   <th>Angkatan</th>
                   <!-- <th>IPK</th> -->
                   <th>Action</th>

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
             
                  <td class="flex"  style="margin-top: 1em;">
                    <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 " style="margin-right: 1em;">
                      <a href="{{ url('detail-alumni_mahasiswa',$mahasiswa->user_id) }}">
                        <i class="fas fa-edit">                            
                          Detail
                        </i>
                      </a>
                    </button>
                    

                    @if($mahasiswa->status != 'Belum Tervalidasi' && $mahasiswa->user_id == $mahasiswa->user_detail->id)     
                    <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 " style="padding: 0.5em;margin-right: 1em;background-color:#7367F0" disabled>
                      <i class="fas fa-edit" style="color: #e5e7eb">                            
                        Validate
                      </i>

                    </button>
                    @else
                    <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 " style="margin-right: 1em;">
                      <a href="{{ route('alumni.show',$mahasiswa->id) }}">
                        <i class="fas fa-edit">                            
                          Validate
                        </i>
                      </a>
                    </button>

                    @endif


                    <button class="text-blue-500 hover:text-blue-400 hover:text-white capitalize md:text-sm text-xs rounded-lg transition-all duration-300 " style="margin-right: 1em;">
                      <a href="{{ route('profile.show',$mahasiswa->id) }}">
                        <i class="fas fa-edit">                            
                          Edit
                        </i>
                      </a>
                    </button>
                    

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

<script type="text/javascript">
  function editData(id){
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
      if(result.value) {
        event.submit();

      }
    })
  }
  $(function() {
    $( "#date" ).datepicker({dateFormat: 'yy'});
  });​
</script>
</x-app-layout>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection
