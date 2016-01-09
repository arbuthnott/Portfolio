@extends('resume.master')

@section('endOfHead')
    <title>Chris Arbuthnott</title>
    {!! Html::style('css/animStyle.css') !!}
@endsection

@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 10; $idx++)
            <div class="fishy"></div>
        @endfor
        <div class="headerButton" id="moreFish">More Fish!</div>
        <div class="headerButton" id="linkedIn">Linked In</div>
        <div class="headerButton" id="github">Github</div>
        <h1>Chris Arbuthnott <span class="subtitle">// developer</span></h1>
        <hr />
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
        <nav class="slideButton">
            About Me &nbsp;&nbsp;&dtri;
        </nav>
        <ul>
            <li><a href="#">Experience</a></li>
            <li><a href="#">Projects</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
@endsection

@section('endOfBody')
    {!! Html::script('js/fish.js') !!}
    {!! Html::script('js/ripple.js') !!}
    {!! Html::script('js/resume.js') !!}
@endsection