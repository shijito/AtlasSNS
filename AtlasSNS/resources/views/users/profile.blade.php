@extends('layouts.login')

@section('content')

<div class="form-group">
  {!! Form::open(['url' => '/search']) !!}
  {{ csrf_field() }}
    <div class="form-group">
      {!! Form::input('text','username', null, ['required', 'class' => 'form-control', 'placeholder' => 'ユーザー名']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text','mail-adress', null, ['required', 'class' => 'form-control', 'placeholder' => 'メールアドレス']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text','password', null, ['required', 'class' => 'form-control', 'placeholder' => 'パスワード']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text','password-comfirm', null, ['required', 'class' => 'form-control', 'placeholder' => 'パスワード確認用']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text','self-introduction', null, ['required', 'class' => 'form-control', 'placeholder' => '自己紹介']) !!}
    </div>
    <div class="form-group">
      {!! Form::input('text','image', null, ['required', 'class' => 'self-introduction', 'placeholder' => '画像変更']) !!}
    </div>
  {!! Form::close() !!}
</div>

@endsection
