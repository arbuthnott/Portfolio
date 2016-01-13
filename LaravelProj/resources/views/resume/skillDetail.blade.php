@extends('resume.master')

@section('endOfHead')
    <title>Skill: {{ $skill->name }}</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 3; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>skill &rtri; {{ $skill->name }}</h2>
            <p class="subtitle">{{ $skill->description }}</p>
            <hr />
            <p>{{ $skill->experience }}</p>
            
            <h3>Related Skills:</h3>
            @foreach($skill->relatedSkills as $related)
                <span class="skillBrick"><a href="/skills/{{ $related->alias }}">{{ $related->name }}</a></span>
            @endforeach
            <hr />
            
            @if (!$skill->projects->isEmpty())
                <h3 class="green">Related Projects:</h3>
                @foreach($skill->projects()->orderBy('importance', 'desc')->get() as $project)
                    @include('resume.partials.projectTile', ['project' => $project])
                @endforeach
                <hr class="clearing" />
            @endif
            
            @if (!$skill->courses->isEmpty())
                <h3 class="yellow">Related Education:</h3>
                @foreach($skill->courses()->orderBy('importance', 'desc')->get() as $course)
                    @include('resume.partials.courseTile', ['course' => $course])
                @endforeach
            @endif
                
        </section>
    </div>
@endsection


@section('endOfBody')
    
@endsection