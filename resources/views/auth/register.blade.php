@extends('layouts.app')

@section('content')

<div class="panel-heading">会員登録</div>
<div class="panel-body">
    {!! Form::open(['route' => 'signup.post']) !!}
        <div class="form-group">
            {!! Form::label('name', 'お名前') !!}
            {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'メールアドレス') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'パスワード') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
        </div>
        
        <div class="text-right">
            {!! Form::submit('登録する', ['class' => 'btn btn-success']) !!}
        </div>
    
    
    
    {!! Form::close() !!}
    
    
    
</div>

@endsection