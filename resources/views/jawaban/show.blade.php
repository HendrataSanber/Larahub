@extends('adminlte.master')


@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail isi</h3>
        <p>Isi : {{$jawaban->isi}}</p>
        <a href="/jawaban" class="btn btn-info">Back</a>
    </div>
@endsection
