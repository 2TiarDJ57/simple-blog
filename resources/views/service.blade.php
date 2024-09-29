
@extends('layouts.main')

    

    @section('container')
    <h1>Halaman Service</h1>

    @foreach ($service as $svc)

            <h3>  
                <a href="/service/{{ $svc->nama }}">{{ $svc->nama }}</a>
            </h3>  
        
    @endforeach
    
    @endsection
    
    