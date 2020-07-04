@extends('adminlte.master')

@section('content')
<a href="/pertanyaan/create" class="btn btn-warning">Buat baru</a>
<table class="table mt-3 ml-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($pertanyaan as $key=>$pert)
      <tr>
        <td>{{$key+1}}</td>
        <td>{{$pert->judul}}</td>
        <td>{{$pert->isi}}</td>
        <td>
        <a href="/pertanyaan/{{$pert->id}}" class="btn btn-sm btn-info">show</a>
        <a href="/pertanyaan/{{$pert->id}}/edit" class="btn btn-sm btn-warning">edit</a>
        <form action="pertanyaan/{{$pert->id}}" method="POST" style="display:inline">
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
