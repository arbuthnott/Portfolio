@extends('resume.master')

@section('endOfHead')
    <title>Education</title>
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 5; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>Education</h2>
            <hr />
            <p>
                My formal education includes a Masters degree in mathematics from the University
                of Waterloo, and a 2-year IT Diploma (Programming) from Nova Scotia Community College.
            </p>
            <img class="diploma" src="/images/degreeuwdegree.jpg" alt="MPMath Diploma" />
            <p>
                Listed below are courses I've taken relevant to Information Technology.
                A few items are from my degrees in Mathematics or online courses but
                most are classes taken during program at NSCC.
                
            </p>
            <p class="subtitle">
                *Click on any education item for more information.
            </p>
            <p><a href="/">Back to Main Page</a></p>
            <hr />
            
            @foreach($courses as $course)
                <h4 class="courseTitle"><a href="/education/{{ $course->alias }}">{{ $course->name }}</a></h4>
                <ul>
                    <li>
                        <strong>Topics: </strong>
                        {{ $course->topic_list }}
                    </li>
                    <li>
                        Completed {{ $course->completion_date }}
                        @if($course->grade != null)
                            | Grade: {{ $course->grade }}%
                        @endif
                    </li>
                </ul>
            @endforeach
                
        </section>
    </div>
    
@endsection


@section('endOfBody')
    
@endsection