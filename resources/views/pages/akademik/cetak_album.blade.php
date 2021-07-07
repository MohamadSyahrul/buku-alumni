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

<body style="background-color: #daeaf5;">
<img src="{{ ('Akademik-Album/'. $album->gambar_album) }}" alt="" width="100%"/ style="padding-bottom: 10em; padding-top: 10em">
	<table width="100%">
		<tr>
			
		<!--  -->
			<td align="left"><img src="{{ ('Poliwangi_Logo.png') }}" alt="" width="150"/></td>
		</tr>

	</table>

	<table width="100%">
		<tr>
			<!--  -->
		</tr>

	</table>

	<br/>
	
	<table width="100%" style="text-transform: uppercase;">
		
		<tbody >
			<?php $number=1;?>
			@if($mahasiswa->count() > 0)

			@foreach($mahasiswa as $mahasiswa)
			<tr style="color: lightgray">
				@if($mahasiswa->foto == null)
				<td style="margin-left: 1em;">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswa->foto) }}" style="max-width: 230px; max-height: 150px;"> 
				</td>
				@else
				<td style="margin-left: 1em;">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswa->foto) }}" style="max-width: 230px; max-height: 150px;"> 
				</td>
				@endif
				<td style="padding-right: 9em">NIM : {{ $mahasiswa->nim }}<br>
					Nama : {{ $mahasiswa->nama }}<br>
					Tempat/Tanggal Lahir  : {{ $mahasiswa->tempat_lahir }}, {{Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y') }}<br>
					Jenis Kelamin : {{ $mahasiswa->jenis_kelamin }}<br>
					Prodi : {{ $mahasiswa->prodi }}<br>
					Alamat : {{ \Illuminate\Support\Str::limit($mahasiswa->alamat, 30, $end='...') }}<br>
					Telepon :{{ $mahasiswa->telepon  }}<br>
					Lama Studi : {{ $mahasiswa->lama_studi }}<br>
					Judul TA : {{ $mahasiswa->judul_laporan }} <br>
					Judul TA : {{ \Illuminate\Support\Str::limit($mahasiswa->judul_laporan, 30, $end='...') }}<br>
					IPK : {{ $mahasiswa->ipk }}</td><br>

				</tr>
				

				<?php $number++;?> @endforeach
				@else

				@endif
			</tbody>

			
		</table>
		

	</body>
	</html>
