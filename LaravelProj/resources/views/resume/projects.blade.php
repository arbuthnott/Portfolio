@extends('resume.master')

@section('endOfHead')
    <title>Projects</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 6; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>Projects</h2>
            <hr />
            <p>
                These are some of the IT Projects I have completed over the years. Many are course assignments
                from NSCC, many are personal Projects, and some are completed work from my summer workterm at
                SimplyCast working on their Web Application
            </p>
            <p>
                Some projects have an external link related to the project - a few of the games or web projects
                can be directly viewed at these links.  Some have a Github link where you can view the project
                source code.
            </p>
            <p class="subtitle">
                *Click on any project to learn more about it.
            </p>
            <p><a href="/">Back to Main Page</a></p>
            <hr />
            
            @foreach($projects as $project)
                @include('resume.partials.projectTile', ['project' => $project])
            @endforeach
                
        </section>
    </div>
    
@endsection


@section('endOfBody')
    
@endsection