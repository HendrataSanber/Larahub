@extends('adminlte.master')

@section('content')
    <h1>Halaman create</h1>
@endsection

@push('scripts')
    <script>
    var wrappers=document.getElemenyByClassName("wrappers");
    var items=["ini","contoh"];
    console.log("ini items:"+items)
    </script>
@endpush