@extends('adminlte.master')

@section('content')
<a href="/jawaban/create" class="btn btn-warning">Buat baru</a>
<table class="table mt-3 ml-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Isi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($jawaban as $key=>$jaw)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$jaw->isi}}</td>
        <td>
        <a href="/jawaban/{{$jaw->id}}" class="btn btn-sm btn-info">show</a>
        <a href="/jawaban/{{$jaw->id}}/edit" class="btn btn-sm btn-warning">edit</a>
        <form action="jawaban/{{$jaw->id}}" method="POST" style="display:inline">
          @csrf
          @method('DELETE')
          <button type='submit' class='btn btn-sm btn-danger'><i class="fas fa-trash"></i></button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection
