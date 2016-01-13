@extends('resume.master')

@section('endOfHead')
    <title>Skill: {{ $skill->name }}</title>
    <link href="{{ asset('/css/skills.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 3; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h3><span class="subtitle">skill &rtri; </span>{{ $skill->name }}</h3>
            <p class="subtitle">{{ $skill->description }}</p>
            <hr />
            <p>{{ $skill->experience }}</p>
            
            <h4>Related Skills:</h4>
            @foreach($skill->relatedSkills as $related)
                <span class="skillBrick"><a href="/skills/{{ $related->alias }}">{{ $related->name }}</a></span>
            @endforeach
            <hr />
            
            <h4>Related Projects:</h4>
            @foreach($skill->projects()->orderBy('importance', 'desc')->get() as $project)
                <p></p>
            @endforeach
            <hr />
            
            <h4>Related Education:</h4>
            @foreach($skill->courses()->orderBy('importance', 'desc')->get() as $course)
                <p></p>
            @endforeach
                
        </section>
    </div>
@endsection


@section('endOfBody')
    
@endsection