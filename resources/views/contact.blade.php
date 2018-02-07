@extends('layouts.app')

@section('content')
<h1>Contact</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem beatae cupiditate deserunt dolorum eaque enim error excepturi exercitationem ipsam necessitatibus nobis omnis placeat quidem quo sapiente, sed sint tenetur ullam.</p>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
    {{ Form::label('name', 'Name') }}
    {{ Form::text('name', '', ['placeholder' => 'Enter your name', 'class' => 'form-control', 'autocomplete' => 'off']) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'E-Mail Address') }}
    {{ Form::text('email', '', ['placeholder' => 'Enter your email', 'class' => 'form-control', 'autocomplete' => 'off']) }}
</div>
<div class="form-group">
    {{ Form::label('message', 'Message') }}
    {{ Form::textarea('message', '', ['placeholder' => 'Enter message', 'class' => 'form-control', 'autocomplete' => 'off']) }}
</div>
<div>
    {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
</div>
{!! Form::close() !!}
@endsection