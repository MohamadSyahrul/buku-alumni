<script type="text/javascript">
window.onload = function(){
  document.getElementById('btn').click();
</script>


@extends('layouts.master')
@section('title')
Poliwangi - Buku Alumni <?php echo date("M Y"); ?>
@endsection
@section('content')
<x-app-layout>
  <x-slot name="header">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('album-akademik.update' , $album->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="modal-body">
          <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Nama Album</label>
           </div>
           <div class="col-lg-8">
             <input type="text" value="{{$album->nama_album}}" class="form-control" name="nama_album">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Angkatan</label>
           </div>
           <div class="col-lg-8">
             <input type="text" value="{{$album->angkatan}}" class="form-control" name="angkatan">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Gambar Album</label>
           </div>
           <div class="col-lg-8">
             <input type="file" class="form-control" name="gambar_album">
           </div>
         </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button>
    <button type="submit" class="btn btn-primary">Update</button>
  </div>

</form>
</div>
</div>
</x-slot>
</x-app-layout>
@endsection