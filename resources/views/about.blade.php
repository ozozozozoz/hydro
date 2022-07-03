@extends('layouts.content')

@section('title')
    About Us | Hydro
@endsection

@section('crumbs')
    About Us
@endsection

@section('content')

    @foreach ($abouts as $about)
    
    <h1>{{ $about->Headline }}</h1><br/>
    <p>{{ $about->P1 }}</p>
    <p>{{ $about->P2 }}</p>
    
    @endforeach

@endsection
