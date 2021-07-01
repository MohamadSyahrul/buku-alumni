  <!doctype html>
<html lang="en" style="background-color: lightgray;">
<head>
<!-- <meta charset="UTF-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Buku Alumni 2</title>
 <!-- <link rel="icon" type="image/jpg" href="{{ asset('/startbootstrap-sb-admin-2-master/img/Logo-PLN-Terbaru.jpg') }} "> -->
<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
      pre {
    text-align: left;
    white-space: pre-line;
  }

</style>

</head>
<body >

 

     <div class="container" >
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
          
   
            <div class="col-lg-7" >
              <div class="p-0">
                @if($mahasiswa->count() > 0)

<div class="col-lg-9 d-none d-lg-block " style="background-image: url('{{ asset('Poliwangi_Logo.png') }} '); background-size: cover;background-position: center;max-height: 150px;max-width: 150px;margin-left:5em;margin-top: 10em;margin-right: 5em"></div>

           <div class="form-group row" style="padding-top: 1em;padding-right: 1em;">
            @foreach($mahasiswa as $mahasiswa)
           
              <div class="col-sm-2 mb-3 mb-sm-0" >
                  <img align="left" src="{{ asset('Foto-Mahasiswa/'.$mahasiswa->foto.'') }}" style="width: 400px; height: 300px;padding-right: 1em;display:block;">

                  <!-- <img src="{{ public_path() . '/Foto-Mahasiswa/'.$mahasiswa->foto }}" alt="" style="width: 150px; height: 150px;"> -->
               </div>
              <div class="col-sm-10"  >
               <div class="sidebar-brand-text mx-3">NIM : {{$mahasiswa->nim}}</div>
               <div class="sidebar-brand-text mx-3">Nama : {{$mahasiswa->nama}}</div>
               <div class="sidebar-brand-text mx-3">Tempat/Tanggal Lahir  : {{$mahasiswa->tempat_lahir}}, {{Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y')}}</div>
               <div class="sidebar-brand-text mx-3">Jenis Kelamin : {{$mahasiswa->jenis_kelamin}}</div>
               <div class="sidebar-brand-text mx-3">Prodi : {{$mahasiswa->prodi}}</div>
               <div class="sidebar-brand-text mx-3">Alamat : {{\Illuminate\Support\Str::limit($mahasiswa->alamat, 30, $end='...')}}</div>
               <div class="sidebar-brand-text mx-3">Telepon :{{ $mahasiswa->telepon }}</div>
               <div class="sidebar-brand-text mx-3">Lama Studi : {{$mahasiswa->lama_studi}}</div>
               <div class="sidebar-brand-text mx-3">Judul TA : {{\Illuminate\Support\Str::limit($mahasiswa->judul_laporan, 30, $end='...')}}</div>
               <div class="sidebar-brand-text mx-3">IPK : {{$mahasiswa->ipk}}</div>

             </div>
           </div>
           <br />
           <br />
           <br />
           @endforeach
           @else
             <div class="col-lg-9 d-none d-lg-block" style="padding-top: 4em;padding-bottom: 4em;margin-left: 20em;">
              <p style="font-size: 30px"> BELUM ADA DATA</p>
              </div>
           @endif
         </div>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
  <br><br><br>
<footer><center><span>Buku Alumni 2</span></center></footer>
</body>
</html>