@extends('resume.master')

@section('endOfHead')
    <title>Project: {{ $project->name }}</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 3; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>project &rtri; {{ $project->name }}</h2>
            <hr />
            <img class="mainProject" src="/images/projects/{{ $project->alias }}.png" alt="{{ $project->name }} image" />
            <p>{{ $project->description }}</p>
            <ul>
                @if($project->github_link != null)
                    <li>
                        <strong>Github:</strong>
                        <a target="_blank" href="{{ $project->github_link }}">{{ substr($project->github_link, strpos($project->github_link, '://') + 3) }}</a>
                    </li>
                @endif
        
                @if($project->other_link != null)
                    <li>
                        <strong>External Link:</strong>
                        <a target="_blank" href="{{ $project->other_link }}">{{ substr($project->other_link, strpos($project->other_link, '://') + 3) }}</a>
                    </li>
                @endif
        
                @if($project->completion_date != null)
                    <li>
                        <strong>Completed On:</strong>
                        {{ $project->completion_date }}
                    </li>
                @endif
            </ul>
            <hr />
            
            <h3>Related Skills:</h3>
            @foreach($project->skills as $related)
                <span class="skillBrick"><a href="/skills/{{ $related->alias }}">{{ $related->name }}</a></span>
            @endforeach
            <hr />
            
            @if (!$project->courses->isEmpty())
                <h3 class="yellow">Related Education:</h3>
                @foreach($project->courses()->orderBy('importance', 'desc')->get() as $course)
                    @include('resume.partials.courseTile', ['course' => $course])
                @endforeach
            @endif
                
        </section>
    </div>
@endsection


@section('endOfBody')
    
@endsection