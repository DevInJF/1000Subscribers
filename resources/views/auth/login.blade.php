@extends('layouts.app')

@section('content')
<section class="dashboard-header">
    <div class="row">
        <div class="small-12 columns">
            <h2 class="text-center">Login</h2>
        </div>
    </div>
</section>
<section class="dashboard">
    <div class="row">
        <div class="small-12 large-6 large-offset-3 columns">
            @include('partials.errors')
            @include('partials.success')
            {!! Form::open(['url' => 'login', 'class' => 'callout']) !!}
                <div class="row">
                    <div class="large-6 columns">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'radius']) !!}
                    </div>
                    <div class="large-6 columns">
                        {!! Form::label('password', 'Password') !!}
                        {!! Form::password('password', ['class' => 'radius']) !!}
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                        {!! Form::checkbox('remember') !!} Remember Me<br>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        {!! Form::submit('Login', array('class' => 'button expanded')) !!}
                    </div>
                </div>
            {!! Form::close() !!}
            <p class="text-center">Forget your password or it isn&rsquo;t working? <a href="/password/email">You might need to reset it.</a></p>
        </div>
    </div>
</section>
@endsection