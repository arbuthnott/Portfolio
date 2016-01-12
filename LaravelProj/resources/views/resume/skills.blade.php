@extends('resume.master')

@section('endOfHead')
    <title>Skills</title>
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
            <h3>Information Technology Skills</h3>
            <hr />
            <p>
                These are some of the IT Skills I have learned through formal education, self study,
                or by working on projects.
            </p>
            <p class="subtitle">
                *Click on a skill to learn more about my experience in that area.
            </p>
            <hr />
            
            <h4 class="yellow">Languages</h4>
                @foreach($languages as $lang)
                    <span class="skillBrick"><a href="/skills/{{ $lang->alias }}">
                        {{ $lang->name }}
                    </a></span>
                @endforeach
                
            <h4 class="cyan">Software and Platforms</h4>
                @foreach($software as $sw)
                    <span class="skillBrick"><a href="/skills/{{ $sw->alias }}">
                        {{ $sw->name }}
                    </a></span>
                @endforeach
                
            <h4 class="pink">Other Technical Skills</h4>
                @foreach($technical as $tech)
                    <span class="skillBrick"><a href="/skills/{{ $tech->alias }}">
                        {{ $tech->name }}
                    </a></span>
                @endforeach
                
            <h4 class="green">Soft Skills / Miscellaneous</h4>
                @foreach($other as $oth)
                    <span class="skillBrick"><a href="/skills/{{ $oth->alias }}">
                        {{ $oth->name }}
                    </a></span>
                @endforeach
                
        </section>
    </div>
    
@endsection


@section('endOfBody')
    
@endsection