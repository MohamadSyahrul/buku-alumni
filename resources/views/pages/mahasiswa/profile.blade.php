@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<x-app-layout>
  <x-slot name="header">


    <div class="dropdown mb-2" style="background-color: #fff">
      <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#TambahData">Ubah Data</button>

    </div>
    <div class="container">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg-9 d-none d-lg-block " style="background-image: url('{{ asset('Poliwangi Logo.png')}} '); background-size: cover;background-position: center;max-height: 150px;max-width: 150px;margin-left:5em;margin-top: 10em;margin-right: 5em"></div>

            <div class="col-lg-7" >
              <div class="p-0">
                 @if(count(array($mahasiswa)) <1)
           
              <div class="form-group row" style="padding-top: 4em;">
              <p style="font-size: 30px"> BELUM ADA DATA</p>
              </div>
           @else
          @foreach($mahasiswa as $mahasiswa)
          @if($mahasiswa->user_id == Auth::user()->id)
            <div class="form-group row" style="padding-top: 1em;">
              <div class="col-sm-2 mb-3 mb-sm-0" >
                 <h6>Nim </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->nim}}</div>
             </div>
           </div>
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Nama </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->nama}}</div>
             </div>
           </div>
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Tempat Lahir </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->tempat_lahir}}</div>
             </div>
           </div>
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Tanggal Lahir </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">
               :{{Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y')}}
               </div>
             </div>
           </div>
           <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Jenis Kelamin </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->jenis_kelamin}}</div>
             </div>
           </div>
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Prodi </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->prodi}}</div>
             </div>
           </div>
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Alamat </h6>
               </div>
              <div class="col-lg-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->alamat}}</div>
             </div>
           </div>
             <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Lama Studi </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->lama_studi}}</div>
             </div>
           </div>
             <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Judul Laporan </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->judul_laporan}}</div>
             </div>
           </div>
             <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Tahun Lulus </h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">: {{$mahasiswa->tahun_lulus}}</div>
             </div>
           </div>
             <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <h6>Wisuda</h6>
               </div>
              <div class="col-sm-10">
               <div class="sidebar-brand-text mx-3">
               : {{$mahasiswa->angkatan}}
               </div>
             </div>
           </div>            
           @endif
           @endforeach
           @endif
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>

</x-slot>
<div class="modal fade" id="TambahData" tabindex="-1" role="dialog" aria-labelledby="TambahDataLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title capitalize" id="exampleModalLabel">sinkronkan siswa ke dalam kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ url('profile')}}" method="post">
        @csrf
        
        <div class="modal-body">
          <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">NIM</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control" name="nim">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Nama</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control" name="nama">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Tempat Lahir</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control" name="tempat_lahir">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Tanggal Lahir</label>
           </div>
           <div class="col-lg-8">
             <input type="date" class="form-control" name="tanggal_lahir">
           </div>
         </div>

         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Jenis Kelamin</label>
           </div>
           <div class="col-lg-8">
            <select name="jenis_kelamin" class="form-control">
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
          <select name="prodi" class="form-control">
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
         <input type="text" class="form-control" name="alamat">
       </div>
     </div>
     <div class="form-group row">
       <div class="col-lg-3">
         <label class="col-form-label">Telepon/HP</label>
       </div>
       <div class="col-lg-8">
         <input type="text" class="form-control" name="telepon">
       </div>
     </div>
     <div class="form-group row">
       <div class="col-lg-3">
         <label class="col-form-label">Lama Studi</label>
       </div>
       <div class="col-lg-8">
         <input type="text" class="form-control" name="lama_studi" placeholder="Contoh 3 Tahun 8 Bulan "> 
       </div>
     </div>
     <div class="form-group row">
       <div class="col-lg-3">
         <label class="col-form-label">Judul Laporan</label>
       </div>
       <div class="col-lg-8">
         <input type="text" class="form-control" name="judul_laporan">
       </div>
     </div>
     <div class="form-group row">
       <div class="col-lg-3">
         <label class="col-form-label">Tahun Lulus</label>
       </div>
       <div class="col-lg-8">
        <input type="text" name="tahun_lulus" class="form-control">
      </div>
    </div>
     <div class="form-group row">
         <div class="col-lg-3">
           <label class="col-form-label">Angkatan Wisuda</label>
         </div>
         <div class="col-lg-8">
          <select name="angkatan" class="form-control">
            @if(count(array($album)) <1)
            <option disabled value=""> BELUM ADA ALBUM </option>
            @else
            @foreach($album as $key => $PA)
            <option value="{{$PA->angkatan}}"> {{$PA->angkatan}} </option>
           @endforeach
           @endif
          </select>
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
      confirmButtonText: 'Yes, delete it!'
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
@endsection
