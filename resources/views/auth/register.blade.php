@extends('layouts.logout')

@section('content')

{!! Form::open() !!}

<h2>新規ユーザー登録</h2>

{{ Form::label('ユーザー名') }}
{{ Form::text('username',null,['class' => 'input']) }}

@error('username')
  <li>{{$message}}</li>
@enderror

{{ Form::label('メールアドレス') }}
{{ Form::text('mail',null,['class' => 'input']) }}

@error('mail')
  <li>{{$message}}</li>
@enderror

{{ Form::label('パスワード') }}
{{ Form::text('password',null,['class' => 'input']) }}

@error('password')
  <li>{{$message}}</li>
@enderror


{{ Form::label('パスワード確認') }}
{{ Form::text('password_confirmation',null,['class' => 'input']) }}




{{ Form::submit('登録') }}

<p><a href="/login">ログイン画面へ戻る</a></p>

{!! Form::close() !!}


@endsection
