@extends('adminlte.master')


@section('content')
<form action="/pertanyaan" method="POST" class="mt-3 ml-3">
@csrf
<div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Judul" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="isi">Judul:</label>
    <input type="text" class="form-control" placeholder="isi" id="isi" name="isi">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" placeholder="Acc id" id="accid" value="1" name="account_id">
  </div>
  <button type="submit" class="btn btn-warning">Submit</button>
</form> 
@endsection
