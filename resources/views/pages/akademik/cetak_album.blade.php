<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PT. PLN Persero</title>
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

	<table width="100%">
		<tr>
			
			<td align="left">
				<h3>Politeknik Negeri Banyuwangi</h3>
				<pre>
					{{ $album->nama_album }}<br>
					{{ $album->tahun_terbit }}<br>
				</pre>
			</td>
			<td align="right"><img src="{{ ('Poliwangi_Logo.png') }}" alt="" width="150"/></td>
		</tr>

	</table>

	<table width="100%">
		<tr>
			<!--  -->
		</tr>

	</table>

	<br/>
	
	<table width="100%" style="text-transform: uppercase;">
		
		<tbody>
			<?php $number=1;?>
			@if($mahasiswa->count() > 0)

			@foreach($mahasiswa as $mahasiswa)

			<tr style="width: 20%">
				@if($mahasiswa->foto == null)
				<td rowspan="5">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswa->foto) }}" style="max-width: 200px; max-height: 150px;"> <br>
				</td>
				@else
				<td rowspan="5">  <img src="{{ ('Foto-Mahasiswa/'.$mahasiswa->foto) }}" style="max-width: 200px; max-height: 150px;"> <br>
				</td>
				@endif
				<hr>
			</tr>
			<tr style="width: 80%">
				<td>NIM : {{ $mahasiswa->nim }}<br>
					Nama : {{ $mahasiswa->nama }}<br>
					Tempat/Tanggal Lahir  : {{ $mahasiswa->tempat_lahir }}, {{Carbon\Carbon::parse($mahasiswa->tanggal_lahir)->translatedFormat('d F Y') }}<br>
					Jenis Kelamin : {{ $mahasiswa->jenis_kelamin }}<br>
					Prodi : {{ $mahasiswa->prodi }}<br>
					Alamat : {{ \Illuminate\Support\Str::limit($mahasiswa->alamat, 30, $end='...') }}<br>
					Telepon :{{ $mahasiswa->telepon  }}<br>
					Lama Studi : {{ $mahasiswa->lama_studi }}<br>
					Judul TA : {{ \Illuminate\Support\Str::limit($mahasiswa->judul_laporan, 30, $end='...') }}<br>
					IPK : {{ $mahasiswa->ipk }}</td><br>

				</tr>

				<?php $number++;?> @endforeach
				@else

				@endif
			</tbody>

			
		</table>
		<br><br><br>
		<footer><center><span>Buku Alumni {{ $album->tahun_terbit }}</span></center></footer>

	</body>
	</html>
