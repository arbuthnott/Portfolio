@extends('resume.master')

@section('endOfHead')
    <title>Education: {{ $course->code }}</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 3; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>education &rtri; {{ $course->name }}</h2>
            <p class="subtitle">{{ $course->code }}</p>
            <hr />
            <p>{{ $course->description }}</p>
            <ul>
                <li>
                    <strong>Topics:</strong>
                    {{ $course->topic_list }}
                </li>
                @if($course->completion_date != null)
                    <li><strong>Completed: </strong>{{ $course->completion_date }}</li>
                @endif
                @if($course->grade != null)
                    <li><strong>Grade: </strong>{{ $course->grade }}%</li>
                @endif
            </ul>
            <p><a href="/education">Back to All Education</a></p>
            <hr />
            
            <h3 class="yellow">Related Skills:</h3>
            @foreach($course->skills as $related)
                <span class="skillBrick"><a href="/skills/{{ $related->alias }}">{{ $related->name }}</a></span>
            @endforeach
            <hr />
            
            @if (!$course->projects->isEmpty())
                <h3 class="pink">Related Projects:</h3>
                @foreach($course->projects()->orderBy('importance', 'desc')->get() as $project)
                    @include('resume.partials.projectTile', ['project' => $project])
                @endforeach
            @endif
                
        </section>
    </div>
@endsection


@section('endOfBody')
    
@endsection