@extends('adminlte.master')

@section('content')
    <h1> Ini halaman create items </h1>
@endsection

@push('scripts')
    <script>
        var wrapper = document.getElementsByClassName("wrapper");
        var items = ["ini", "contoh"];

        console.log("Ini items : ", items)
    </script>
@endpush