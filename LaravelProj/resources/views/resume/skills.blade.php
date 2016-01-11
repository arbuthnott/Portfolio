@extends('resume.master')

@section('endOfHead')
    <title>Skills</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @include('resume.partials.header')
        
        @include('resume.partials.sidenav', ['homepage' => false])
    </div>
    
@endsection


@section('endOfBody')
    
@endsection