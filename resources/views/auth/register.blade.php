@extends('layouts.app')

@section('content')
<section class="dashboard-header">
    <div class="row">
        <div class="small-12 columns">
            <h2 class="text-center">Set Up Your 1000 Subscribers Account</h2>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="small-12 medium-6 medium-offset-3 columns">
            @include('partials.errors')
            {!! Form::open(['url' => 'register', 'class' => 'callout']) !!}
                <div class="row">
                    <div class="small-12 large-6 columns">
                        {!! Form::label('first_name', 'First Name') !!}
                        {!! Form::text('first_name', old('first_name')) !!}
                    </div>
                     <div class="small-12 large-6 columns">
                        {!! Form::label('last_name', 'Last Name') !!}
                        {!! Form::text('last_name', old('last_name')) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 large-6 columns">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email')) !!}
                    </div>
                    <div class="small-12 large-6 columns">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password') !!}
                    </div>
                </div>
                <div class="row">
                    <div class="small-12 columns">
                        {!! Form::submit('Sign Up', array('class' => 'button expanded')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</section>
@endsection