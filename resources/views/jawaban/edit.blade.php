@extends('adminlte.master')


@section('content')
<form action="/jawaban/{{$jawaban->id}}" method="POST" class="mt-3 ml-3">
@csrf
@method("PUT")
  <div class="form-group">
    <label for="isi">Judul:</label>
    <input type="text" class="form-control" placeholder="isi" value="{{$jawaban->isi}}" id="isi" name="isi">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" placeholder="Acc id" id="accid" value="{{$jawaban->id}}" value="1" name="account_id">
  </div>
  <button type="submit" class="btn btn-warning">Update</button>
</form> 
@endsection
