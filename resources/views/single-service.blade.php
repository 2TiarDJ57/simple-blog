@extends('layouts.main')

@section('container')

    <h1>Info Penulis</h1>
    <h3>{{ $service->nama }}</h3>
    <h3>{{ $service->alamat }}</h3>
    <h3>{{ $service->nrp  }}</h3>
    <p>{{ $service->email }}</p>

    <a href="/service">Back to Service</a>
    
@endsection


