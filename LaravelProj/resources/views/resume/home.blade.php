@extends('resume.master')

@section('endOfHead')
    <title>Chris Arbuthnott</title>
@endsection

@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 10; $idx++)
            <div class="fishy"></div>
        @endfor
        <div class="headerButton" id="moreFish">More Fish!</div>
        @include('resume.partials.header')
        
        <article class="floatingRight">
            <h3>What am I looking at?</h3>
            <hr />
            <p>
                The little shapes you see swimming on the page are an example
                of how a small amount of trigonometry and algorithm design can be used to
                model natural or random seeming behaviour.
            </p>
            <p>
                Simple math tricks can be used for display, game mechanics, or to make
                reasonable guesses about what users want based on little information.
            </p>
            <p>
                My name is Chris and I'm a student of both software and mathematics.
                To learn more or contact me click the <em>About Me</em> button on
                the left.
            </p>
            <h3>
                PS - try clicking on the background!
            </h3>
        </article>
            
        @include('resume.partials.sidenav', ['homepage' => true])
    </div>
@endsection

@section('endOfBody')
    {!! Html::script('js/fish.js') !!}
    {!! Html::script('js/ripple.js') !!}
@endsection