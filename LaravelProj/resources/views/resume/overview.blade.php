@extends('resume.master')

@section('endOfHead')
    <title>Chris Arbuthnott</title>
    <link href="{{ asset('/css/overview.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 6; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <img class="overview" src="/images/tree.jpg" alt="Picture of Chris in a tree" />
            <h2>About Chris</h2>
            <hr class="clearing" />
            
            <p>
                Hi, my name is Chris.  I have a young family and live in Dartmouth, Nova Scotia.
                I am lucky to have done many jobs in my life - from <em>teaching Intro Math</em> courses at University of
                Waterloo to inventing <em>Gamification algorithms</em> for SimplyCast here in Dartmouth.  However,
                I spent most of my last decade as a <em>Letter Carrier</em> for Canada Post.
            </p>
            <p>
                Since deciding to re-educate in IT at Nova Scotia Community College, my loved hobby of tinkering with
                code and programming languages has become a loved full-time occupation. Though I miss the exercise of
                being a mailman, doing the latest assignment or fiddling with ideas for a new game or web page keeps
                me happy and interested all day, every day, day after day!
            </p>
            <p>
                After two years of learning how to handle myself in many IT environments, I am looking forward to
                re-entering the workforce and tackling the challenges it will bring.
            </p>
            <hr />
            
            <h3>Formal Education</h3>
                <ul>
                    <li>
                        <strong>IT Diploma Program (Programming) at NSCC</strong><br />
                        Survey of coding languages, networking, industry standards and IT best practices<br />
                        Complete in Spring 2016
                    </li>
                    <li>
                        <strong>Masters of Mathematics, University of Waterloo</strong><br />
                        Focus on logic, abstract algebra, axiomatization and normalization of formal structures<br />
                        Completed April 2003
                    </li>
                    <li>
                        <strong>Bachelors of Science (Mathematics), University of Saskatchewan</strong><br />
                        Foundations in linear algebra, multivariate calculus, geometry, statistics<br />
                        Completed April 2000
                    </li>
                </ul>
            <hr />
            
            <h3>Employment Timeline</h3>
            <hr />
        </section>
        
    </div>
    
@endsection


@section('endOfBody')
    
@endsection