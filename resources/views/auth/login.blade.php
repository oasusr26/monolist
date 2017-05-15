@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-6 col-xs-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading"><b>Login</b></div>
            <div class="panel-body">
                {!! Form::open(['route' => 'login.post']) !!}
                    <div class="form-group">
                        {!! Form::label('email', 'Email') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'password') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="text-right">
                        {!! Form::submit('login', ['class' => 'btn btn-success']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection