<script type="text/javascript">
window.onload = function(){
  document.getElementById('btn').click();
</script>


@extends('template.master')
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

      <form action="{{ route('user-mahasiswa.update' , $mahasiswa->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
     <div class="modal-body">
          <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Nama Mahasiswa</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control" value="{{$mahasiswa->name}}" name="name">
           </div>
         </div>
         <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">NIM Mahasiswa</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control" value="{{$mahasiswa->nim}}" name="nim">
           </div>
         </div>
          <div class="form-group row">
           <div class="col-lg-3">
             <label class="col-form-label">Password</label>
           </div>
           <div class="col-lg-8">
             <input type="text" class="form-control"  name="password">
           </div>
         </div>
  <div class="modal-footer">
    <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Batal </button> -->
    <button type="submit" class="btn btn-primary">Update</button>
  </div>

</form>
</div>
</div>
</x-slot>
</x-app-layout>
@endsection