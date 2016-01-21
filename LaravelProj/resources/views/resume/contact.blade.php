@extends('resume.master')

@section('endOfHead')
    <title>Contact Chris</title>
    <link href="{{ asset('/css/contact.css') }}" rel="stylesheet">
@endsection


@section('content')
    <div class="fullScreen animFrame">
        @for($idx = 0; $idx < 6; $idx++)
            <div class="fishy"></div>
        @endfor
    
        @include('resume.partials.header')
        @include('resume.partials.sidenav', ['homepage' => false])
        
        <section class="content">
            <h2>Contact Chris</h2>
            <hr />
            <p>
                You can contact me by email, text or phone.  You can also connect with me or
                get more information about me through LinkedIn, Github or Facebook.  If you
                prefer, there is a form below you can use to send me an email.
            </p>
            <p>
                I'm happy to receive comments, friendly hello's, or professional inquiries!
            </p>
            <hr />
            
            <a class="linkOnly" href="mailTo:chris.arbuthnott@gmail.com">
                <article class="pianoKey">
                    <strong>Email:</strong>
                    chris.arbuthnott{{ "@" }}gmail.com
                </article>
            </a>
            <article class="pianoKey">
                <strong>Phone/Text:</strong>
                (902) 403-2659
            </article>
            <a class="linkOnly" href="https://www.linkedin.com/in/chrisarbuthnott" target="_blank">
                <article class="pianoKey">
                    <strong>LinkedIn:</strong>
                    linkedin.com/in/chrisarbuthnott
                </article>
            </a>
            <a class="linkOnly" href="https://github.com/arbuthnott" target="_blank">
                <article class="pianoKey">
                    <strong>Github:</strong>
                    github.com/arbuthnott
                </article>
            </a>
            <a class="linkOnly" href="https://www.facebook.com/chris.arbuthnott.5" target="_blank">
                <article class="pianoKey">
                    <strong>Facebook:</strong>
                    facebook.com/chris.arbuthnott.5
                </article>
            </a>
            <hr />
            
            <h3 class="cyan">Contact Form</h3>
            <p>
                You can use this form to send me a comment or a message.
            </p>
            @if ($errors->any())
                <ul class="pink">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            
            @if (isset($confirm))
                <p class="green">{{ $confirm }}</p>
            @endif
                
            {!! Form::open(['method' => 'POST', 'action' => 'ResumeController@send']) !!}
                <div class="form-group">
                    {!! Form::label('sender', 'Your Email:') !!}
                    {!! Form::email('sender', null, ['placeholder' => 'someone@example.com', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('subject', 'Subject:') !!}
                    {!! Form::text('subject', null, ['placeholder' => 'Enter a Subject', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::checkbox('copyme', 1) !!}
                    {!! Form::label('copyme', 'Send CC to my email address') !!}
                </div>
                <div class="form-group">
                    {!! Form::label('body', 'Email Body:') !!}
                    {!! Form::textarea('body', null, ['rows' => '6', 'placeholder' => 'Enter a message', 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Send!') !!}
                </div>
            {!! Form::close() !!}
            
        </section>
    </div>
    
@endsection


@section('endOfBody')
    {!! Html::script('js/piano.js') !!}
@endsection