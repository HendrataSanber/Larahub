@extends('adminlte.master')


@section('content')
    <div class="ml-3 mt-3">
        <h3>Detail pertanyaan</h3>
        <p>Pertanyaan : {{$pertanyaan->judul}}</p>
        <p>Isi : {{$pertanyaan->isi}}</p>
        <a href="/pertanyaan" class="btn btn-info">Back</a>
    </div>
@endsection
