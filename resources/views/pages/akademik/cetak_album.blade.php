<!doctype html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Buku Alumni</title>
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
      background-color: #34a1eb;
    }
    pre {
      text-align: left;
      white-space: pre-line;
    }
  </style>
</head>


<body>
<img src="{{ ('Akademik-Album/'. $album->gambar_album) }}" alt="" width="100%"/ style="padding-bottom: 10em; padding-top: 10em">
 @foreach($prodi as $prodis)
  <table width="100%" style="background-color: #7367F0">
    <tr>
        
            <td align="left" width="30%"><img src="{{ ('Poliwangi_Logo.png') }}" alt="" width="150"/> </td>
            <td width="70%"><h2>{{$prodis->nama_prodi}}</h2></td>
        </div>
    </tr>

  </table>

  <table width="100%">
    <tr>
      <!--  -->
    </tr>

  </table>

  <br/>
  
  <table width="100%" style="text-transform: uppercase;" >
    
    <tbody >
      <?php $number=1;?>
      @if($mahasiswa->count() >= 1)

      @foreach($mahasiswa as $mahasiswas)
      @if($mahasiswas->prodi != $prodis->nama_prodi)

      @else
      <tr>
        @if($mahasiswas->foto == null)
        <td style="margin-left: 1em;padding-bottom: 2em;">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswas->foto) }}" style="max-width: 230px; max-height: 150px;"> 
        </td>
        @else
        <td style="margin-left: 1em;padding-bottom: 2em;">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswas->foto) }}" style="max-width: 230px; max-height: 150px;"> 
        </td>
        @endif
        <td style="padding-right: 9em;padding-bottom: 2em;">NIM : {{ $mahasiswas->nim }}<br>
          Nama : {{ $mahasiswas->nama }}<br>
          Tempat/Tanggal Lahir  : {{ $mahasiswas->tempat_lahir }}, {{Carbon\Carbon::parse($mahasiswas->tanggal_lahir)->translatedFormat('d F Y') }}<br>
          Jenis Kelamin : {{ $mahasiswas->jenis_kelamin }}<br>
          Prodi : {{ $mahasiswas->prodi }}<br>
          Alamat : {{ \Illuminate\Support\Str::limit($mahasiswas->alamat, 30, $end='...') }}<br>
          Telepon :{{ $mahasiswas->telepon  }}<br>
          Lama Studi : {{ $mahasiswas->lama_studi }}<br>
          Judul TA : {{ $mahasiswas->judul_laporan }} <br>
          Judul TA : {{ \Illuminate\Support\Str::limit($mahasiswas->judul_laporan, 30, $end='...') }}<br>
          IPK : {{ $mahasiswas->ipk }}</td><br>
       

        </tr>

        <?php $number++;?>
        
        @endif         
        @endforeach
        @else

        @endif
      </tbody>

      
    </table>
    <div style="page-break-after: always;"></div>

  </body>
@endforeach

  </html>
