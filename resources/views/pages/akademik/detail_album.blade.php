@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<x-app-layout>
  <x-slot name="header">
                 @if(count($mahasiswa) <1)
     
              <div class="form-group row" style="padding-top: 4em;padding-bottom: 4em; margin-left: 23em;">
              <p style="font-size: 30px"> BELUM ADA ALUMNI</p>
              </div> 

            
           @else
          <?php
//Columns must be a factor of 12 (1,2,3,4,6,12)
$numOfCols = 2;
$rowCount = 0;
$bootstrapColWidth = 12 / $numOfCols;
foreach ($mahasiswa as $row){
  if($rowCount % $numOfCols == 0) { ?> <div class="row"> <?php } 
    $rowCount++; ?>  
        <div class="col-md-<?php echo $bootstrapColWidth; ?>">
            <div class="form-group row">
              <div class="col-sm-2 mb-3 mb-sm-0">
                 <img src="{{ asset('Foto-Mahasiswa/'.$row->foto) }}">
              </div>
              <div class="col-sm-10">
                {{$row->nama}} <br>
                {{$row->tempat_lahir}} - {{Carbon\Carbon::parse($row->tanggal_lahir)->translatedFormat('d F Y')}} <br>
                {{$row->prodi}} <br>
                </div>
            </div>
        </div>
<?php
    if($rowCount % $numOfCols == 0) { ?> </div> <?php } } ?>

  @endif

</x-slot>
</x-app-layout>

@endsection
